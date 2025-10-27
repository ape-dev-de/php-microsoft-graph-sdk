<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationReport
 */
class SimulationReport
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Overview of an attack simulation and training campaign.
     * @var SimulationReportOverview|\stdClass|null
     */
    public mixed $overview = null;

    /** 
     * The tenant users and their online actions in an attack simulation and training campaign.
     * @var UserSimulationDetails[]
     */
    public array $simulationUsers = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['overview'])) {
            $this->overview = is_array($data['overview']) ? new SimulationReportOverview($data['overview']) : $data['overview'];
        }
        if (isset($data['simulationUsers'])) {
            $this->simulationUsers = $data['simulationUsers'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}

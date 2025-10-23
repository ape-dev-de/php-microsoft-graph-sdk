<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationReport
 */
class SimulationReport
{
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
        if (isset($data['overview'])) {
            $this->overview = $data['overview'];
        }
        if (isset($data['simulationUsers'])) {
            $this->simulationUsers = $data['simulationUsers'];
        }
    }
}

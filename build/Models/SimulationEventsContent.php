<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationEventsContent
 */
class SimulationEventsContent
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Actual percentage of users who fell for the simulated attack in an attack simulation and training campaign. */
    public ?string $compromisedRate = null;

    /** 
     * List of simulation events in an attack simulation and training campaign.
     * @var SimulationEvent[]
     */
    public array $events = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['compromisedRate'])) {
            $this->compromisedRate = $data['compromisedRate'];
        }
        if (isset($data['events'])) {
            $this->events = $data['events'];
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

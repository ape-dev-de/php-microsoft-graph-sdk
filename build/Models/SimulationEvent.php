<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationEvent
 */
class SimulationEvent
{
    /** Count of the simulation event occurrence in an attack simulation and training campaign. */
    public ?float $count = null;

    /** Name of the simulation event in an attack simulation and training campaign. */
    public ?string $eventName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['count'])) {
            $this->count = $data['count'];
        }
        if (isset($data['eventName'])) {
            $this->eventName = $data['eventName'];
        }
    }
}

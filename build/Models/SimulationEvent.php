<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationEvent
 */
class SimulationEvent
{
    public function __construct(
        /** Count of the simulation event occurrence in an attack simulation and training campaign. */
        public ?float $count = null,
        /** Name of the simulation event in an attack simulation and training campaign. */
        public ?string $eventName = null
    ) {}
}

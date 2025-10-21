<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationEventsContent
 */
class SimulationEventsContent
{
    public function __construct(
        /** Actual percentage of users who fell for the simulated attack in an attack simulation and training campaign. */
        public ?string $compromisedRate = null,
        /** List of simulation events in an attack simulation and training campaign. */
        public array $events = []
    ) {}
}

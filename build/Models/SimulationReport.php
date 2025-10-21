<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationReport
 */
class SimulationReport
{
    public function __construct(
        /** Overview of an attack simulation and training campaign. */
        public ?string $overview = null,
        /** The tenant users and their online actions in an attack simulation and training campaign. */
        public array $simulationUsers = []
    ) {}
}

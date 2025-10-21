<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttackSimulationRepeatOffender
 */
class AttackSimulationRepeatOffender
{
    public function __construct(
        /** The user in an attack simulation and training campaign. */
        public ?string $attackSimulationUser = null,
        /** Number of repeat offences of the user in attack simulation and training campaigns. */
        public ?float $repeatOffenceCount = null
    ) {}
}

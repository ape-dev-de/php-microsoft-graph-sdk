<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttackSimulationTrainingUserCoverage
 */
class AttackSimulationTrainingUserCoverage
{
    public function __construct(
        /** User in an attack simulation and training campaign. */
        public ?string $attackSimulationUser = null,
        /** List of assigned trainings and their statuses for the user. */
        public array $userTrainings = []
    ) {}
}

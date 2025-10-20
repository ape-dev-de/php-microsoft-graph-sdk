<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttackSimulationTrainingUserCoverage resources
 *
 * Available select fields:
 * - attackSimulationUser
 * - userTrainings
 */
class AttackSimulationTrainingUserCoverageQueryOptions extends QueryOptions
{
    public const FIELD_ATTACK_SIMULATION_USER = 'attackSimulationUser';
    public const FIELD_USER_TRAININGS = 'userTrainings';

    /**
     * Select specific AttackSimulationTrainingUserCoverage properties
     * 
     * @param array<string> $select Use AttackSimulationTrainingUserCoverageQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

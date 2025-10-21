<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttackSimulationRepeatOffender resources
 *
 * Available select fields:
 * - attackSimulationUser
 * - repeatOffenceCount
 */
class AttackSimulationRepeatOffenderQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AttackSimulationRepeatOffender
     */
    public const FIELD_ATTACK_SIMULATION_USER = 'attackSimulationUser';
    public const FIELD_REPEAT_OFFENCE_COUNT = 'repeatOffenceCount';

    /**
     * Select specific AttackSimulationRepeatOffender properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

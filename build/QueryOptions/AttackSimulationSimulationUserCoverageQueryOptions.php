<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttackSimulationSimulationUserCoverage resources
 *
 * Available select fields:
 * - attackSimulationUser
 * - clickCount
 * - compromisedCount
 * - latestSimulationDateTime
 * - simulationCount
 */
class AttackSimulationSimulationUserCoverageQueryOptions extends QueryOptions
{
    public const FIELD_ATTACK_SIMULATION_USER = 'attackSimulationUser';
    public const FIELD_CLICK_COUNT = 'clickCount';
    public const FIELD_COMPROMISED_COUNT = 'compromisedCount';
    public const FIELD_LATEST_SIMULATION_DATE_TIME = 'latestSimulationDateTime';
    public const FIELD_SIMULATION_COUNT = 'simulationCount';

    /**
     * Select specific AttackSimulationSimulationUserCoverage properties
     * 
     * @param array<string> $select Use AttackSimulationSimulationUserCoverageQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

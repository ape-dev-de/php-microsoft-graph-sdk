<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SimulationReport resources
 *
 * Available select fields:
 * - overview
 * - simulationUsers
 */
class SimulationReportQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SimulationReport
     */
    public const FIELD_OVERVIEW = 'overview';
    public const FIELD_SIMULATION_USERS = 'simulationUsers';

    /**
     * Select specific SimulationReport properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

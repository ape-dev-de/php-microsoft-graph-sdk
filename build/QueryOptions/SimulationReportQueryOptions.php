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
    public const FIELD_OVERVIEW = 'overview';
    public const FIELD_SIMULATION_USERS = 'simulationUsers';

    /**
     * Select specific SimulationReport properties
     * 
     * @param array<string> $select Use SimulationReportQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

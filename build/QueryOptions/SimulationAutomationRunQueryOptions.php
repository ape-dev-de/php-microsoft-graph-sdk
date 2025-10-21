<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SimulationAutomationRun resources
 *
 * Available select fields:
 * - endDateTime
 * - simulationId
 * - startDateTime
 * - status
 */
class SimulationAutomationRunQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SimulationAutomationRun
     */
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_SIMULATION_ID = 'simulationId';
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific SimulationAutomationRun properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

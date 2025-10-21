<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SimulationAutomation resources
 *
 * Available select fields:
 * - createdBy
 * - createdDateTime
 * - description
 * - displayName
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - lastRunDateTime
 * - nextRunDateTime
 * - status
 * - runs
 */
class SimulationAutomationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SimulationAutomation
     */
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_LAST_RUN_DATE_TIME = 'lastRunDateTime';
    public const FIELD_NEXT_RUN_DATE_TIME = 'nextRunDateTime';
    public const FIELD_STATUS = 'status';
    public const FIELD_RUNS = 'runs';

    /**
     * Select specific SimulationAutomation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

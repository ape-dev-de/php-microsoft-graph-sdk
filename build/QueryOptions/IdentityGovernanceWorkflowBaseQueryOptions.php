<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceWorkflowBase resources
 *
 * Available select fields:
 * - category
 * - createdDateTime
 * - description
 * - displayName
 * - executionConditions
 * - isEnabled
 * - isSchedulingEnabled
 * - lastModifiedDateTime
 * - createdBy
 * - lastModifiedBy
 * - tasks
 */
class IdentityGovernanceWorkflowBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceWorkflowBase
     */
    public const FIELD_CATEGORY = 'category';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EXECUTION_CONDITIONS = 'executionConditions';
    public const FIELD_IS_ENABLED = 'isEnabled';
    public const FIELD_IS_SCHEDULING_ENABLED = 'isSchedulingEnabled';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_TASKS = 'tasks';

    /**
     * Select specific IdentityGovernanceWorkflowBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

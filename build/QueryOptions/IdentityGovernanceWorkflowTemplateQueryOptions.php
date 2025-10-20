<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceWorkflowTemplate resources
 *
 * Available select fields:
 * - category
 * - description
 * - displayName
 * - executionConditions
 * - tasks
 */
class IdentityGovernanceWorkflowTemplateQueryOptions extends QueryOptions
{
    public const FIELD_CATEGORY = 'category';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EXECUTION_CONDITIONS = 'executionConditions';
    public const FIELD_TASKS = 'tasks';

    /**
     * Select specific IdentityGovernanceWorkflowTemplate properties
     * 
     * @param array<string> $select Use IdentityGovernanceWorkflowTemplateQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceLifecycleWorkflowsContainer resources
 *
 * Available select fields:
 * - customTaskExtensions
 * - deletedItems
 * - insights
 * - settings
 * - taskDefinitions
 * - workflows
 * - workflowTemplates
 */
class IdentityGovernanceLifecycleWorkflowsContainerQueryOptions extends QueryOptions
{
    public const FIELD_CUSTOM_TASK_EXTENSIONS = 'customTaskExtensions';
    public const FIELD_DELETED_ITEMS = 'deletedItems';
    public const FIELD_INSIGHTS = 'insights';
    public const FIELD_SETTINGS = 'settings';
    public const FIELD_TASK_DEFINITIONS = 'taskDefinitions';
    public const FIELD_WORKFLOWS = 'workflows';
    public const FIELD_WORKFLOW_TEMPLATES = 'workflowTemplates';

    /**
     * Select specific IdentityGovernanceLifecycleWorkflowsContainer properties
     * 
     * @param array<string> $select Use IdentityGovernanceLifecycleWorkflowsContainerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

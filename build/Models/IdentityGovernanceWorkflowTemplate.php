<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceWorkflowTemplate
 */
class IdentityGovernanceWorkflowTemplate
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?string $category = null,
        /** The description of the workflowTemplate. */
        public ?string $description = null,
        /** The display name of the workflowTemplate.Supports $filter(eq, ne) and $orderby. */
        public ?string $displayName = null,
        /** Conditions describing when to execute the workflow and the criteria to identify in-scope subject set. */
        public ?string $executionConditions = null,
        /** Represents the configured tasks to execute and their execution sequence within a workflow. This relationship is expanded by default. */
        public array $tasks = []
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceWorkflowVersion
 */
class IdentityGovernanceWorkflowVersion
{
    public function __construct(
        /**  */
        public ?string $category = null,
        /** When a workflow was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** A string that describes the purpose of the workflow. */
        public ?string $description = null,
        /** A string to identify the workflow. */
        public ?string $displayName = null,
        /** Defines when and for who the workflow will run. */
        public ?string $executionConditions = null,
        /** Whether the workflow is enabled or disabled. If this setting is true, the workflow can be run on demand or on schedule when isSchedulingEnabled is true. */
        public ?bool $isEnabled = null,
        /** If true, the Lifecycle Workflow engine executes the workflow based on the schedule defined by tenant settings. Can't be true for a disabled workflow (where isEnabled is false). */
        public ?bool $isSchedulingEnabled = null,
        /** When the workflow was last modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The user who created the workflow. */
        public ?string $createdBy = null,
        /** The unique identifier of the Microsoft Entra identity that last modified the workflow. */
        public ?string $lastModifiedBy = null,
        /** The tasks in the workflow. */
        public array $tasks = [],
        /** The version of the workflow.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
        public ?float $versionNumber = null
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceLifecycleWorkflowsContainer
 */
class IdentityGovernanceLifecycleWorkflowsContainer
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The customTaskExtension instance. */
        public array $customTaskExtensions = [],
        /** Deleted workflows in your lifecycle workflows instance. */
        public ?string $deletedItems = null,
        /** The insight container holding workflow insight summaries for a tenant. */
        public ?string $insights = null,
        /**  */
        public ?string $settings = null,
        /** The definition of tasks within the lifecycle workflows instance. */
        public array $taskDefinitions = [],
        /** The workflows in the lifecycle workflows instance. */
        public array $workflows = [],
        /** @var string[] The workflow templates in the lifecycle workflow instance. */
        public array $workflowTemplates = []
    ) {}
}

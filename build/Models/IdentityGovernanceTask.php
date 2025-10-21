<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTask
 */
class IdentityGovernanceTask
{
    public function __construct(
        /** Arguments included within the task.  For guidance to configure this property, see Configure the arguments for built-in Lifecycle Workflow tasks. Required. */
        public array $arguments = [],
        /**  */
        public ?string $category = null,
        /** A Boolean value that specifies whether, if this task fails, the workflow stops, and subsequent tasks aren''t run. Optional. */
        public ?bool $continueOnError = null,
        /** A string that describes the purpose of the task for administrative use. Optional. */
        public ?string $description = null,
        /** A unique string that identifies the task. Required.Supports $filter(eq, ne) and orderBy. */
        public ?string $displayName = null,
        /** An integer that states in what order the task runs in a workflow.Supports $orderby. */
        public ?float $executionSequence = null,
        /** A Boolean value that denotes whether the task is set to run or not. Optional.Supports $filter(eq, ne) and orderBy. */
        public ?bool $isEnabled = null,
        /** A unique template identifier for the task. For more information about the tasks that Lifecycle Workflows currently supports and their unique identifiers, see Configure the arguments for built-in Lifecycle Workflow tasks. Required.Supports $filter(eq, ne). */
        public ?string $taskDefinitionId = null,
        /** @var string[] The result of processing the task. */
        public array $taskProcessingResults = []
    ) {}
}

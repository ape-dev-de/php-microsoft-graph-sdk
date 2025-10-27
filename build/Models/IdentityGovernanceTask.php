<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTask
 */
class IdentityGovernanceTask
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Arguments included within the task.  For guidance to configure this property, see Configure the arguments for built-in Lifecycle Workflow tasks. Required.
     * @var KeyValuePair[]
     */
    public array $arguments = [];

    /**  */
    public ?IdentityGovernanceLifecycleTaskCategory $category = null;

    /** A Boolean value that specifies whether, if this task fails, the workflow stops, and subsequent tasks aren't run. Optional. */
    public ?bool $continueOnError = null;

    /** A string that describes the purpose of the task for administrative use. Optional. */
    public ?string $description = null;

    /** A unique string that identifies the task. Required.Supports $filter(eq, ne) and orderBy. */
    public ?string $displayName = null;

    /** An integer that states in what order the task runs in a workflow.Supports $orderby. */
    public ?float $executionSequence = null;

    /** A Boolean value that denotes whether the task is set to run or not. Optional.Supports $filter(eq, ne) and orderBy. */
    public ?bool $isEnabled = null;

    /** A unique template identifier for the task. For more information about the tasks that Lifecycle Workflows currently supports and their unique identifiers, see Configure the arguments for built-in Lifecycle Workflow tasks. Required.Supports $filter(eq, ne). */
    public ?string $taskDefinitionId = null;

    /** 
     * The result of processing the task.
     * @var IdentityGovernanceTaskProcessingResult[]
     */
    public array $taskProcessingResults = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['arguments'])) {
            $this->arguments = $data['arguments'];
        }
        if (isset($data['category'])) {
            $this->category = is_array($data['category']) ? new IdentityGovernanceLifecycleTaskCategory($data['category']) : $data['category'];
        }
        if (isset($data['continueOnError'])) {
            $this->continueOnError = is_bool($data['continueOnError']) ? $data['continueOnError'] : (bool)$data['continueOnError'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['executionSequence'])) {
            $this->executionSequence = is_numeric($data['executionSequence']) ? (float)$data['executionSequence'] : $data['executionSequence'];
        }
        if (isset($data['isEnabled'])) {
            $this->isEnabled = is_bool($data['isEnabled']) ? $data['isEnabled'] : (bool)$data['isEnabled'];
        }
        if (isset($data['taskDefinitionId'])) {
            $this->taskDefinitionId = $data['taskDefinitionId'];
        }
        if (isset($data['taskProcessingResults'])) {
            $this->taskProcessingResults = $data['taskProcessingResults'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}

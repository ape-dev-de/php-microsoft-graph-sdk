<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceWorkflowTemplate
 */
class IdentityGovernanceWorkflowTemplate
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?IdentityGovernanceLifecycleWorkflowCategory $category = null;

    /** The description of the workflowTemplate. */
    public ?string $description = null;

    /** The display name of the workflowTemplate.Supports $filter(eq, ne) and $orderby. */
    public ?string $displayName = null;

    /** 
     * Conditions describing when to execute the workflow and the criteria to identify in-scope subject set.
     * @var IdentityGovernanceWorkflowExecutionConditions|\stdClass|null
     */
    public mixed $executionConditions = null;

    /** 
     * Represents the configured tasks to execute and their execution sequence within a workflow. This relationship is expanded by default.
     * @var IdentityGovernanceTask[]
     */
    public array $tasks = [];


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
        if (isset($data['category'])) {
            $this->category = is_array($data['category']) ? new IdentityGovernanceLifecycleWorkflowCategory($data['category']) : $data['category'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['executionConditions'])) {
            $this->executionConditions = is_array($data['executionConditions']) ? new IdentityGovernanceWorkflowExecutionConditions($data['executionConditions']) : $data['executionConditions'];
        }
        if (isset($data['tasks'])) {
            $this->tasks = $data['tasks'];
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

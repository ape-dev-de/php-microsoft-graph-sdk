<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTask
 */
class IdentityGovernanceTask
{
    /**
     * Arguments included within the task.  For guidance to configure this property, see Configure the arguments for built-in Lifecycle Workflow tasks. Required.
     */
    private array $arguments = [];

    /**
     */
    private ?string $category;

    /**
     * A Boolean value that specifies whether, if this task fails, the workflow stops, and subsequent tasks aren''t run. Optional.
     */
    private ?bool $continueOnError;

    /**
     * A string that describes the purpose of the task for administrative use. Optional.
     */
    private ?string $description;

    /**
     * A unique string that identifies the task. Required.Supports $filter(eq, ne) and orderBy.
     */
    private ?string $displayName;

    /**
     * An integer that states in what order the task runs in a workflow.Supports $orderby.
     */
    private ?float $executionSequence;

    /**
     * A Boolean value that denotes whether the task is set to run or not. Optional.Supports $filter(eq, ne) and orderBy.
     */
    private ?bool $isEnabled;

    /**
     * A unique template identifier for the task. For more information about the tasks that Lifecycle Workflows currently supports and their unique identifiers, see Configure the arguments for built-in Lifecycle Workflow tasks. Required.Supports $filter(eq, ne).
     */
    private ?string $taskDefinitionId;

    /**
     * The result of processing the task.
     */
    private ?string $taskProcessingResults;

    public function getArguments(): array
    {
        return $this->arguments;
    }

    public function setArguments(array $arguments): self
    {
        $this->arguments = $arguments;
        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): self
    {
        $this->category = $category;
        return $this;
    }

    public function getContinueOnError(): ?bool
    {
        return $this->continueOnError;
    }

    public function setContinueOnError(?bool $continueOnError): self
    {
        $this->continueOnError = $continueOnError;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getExecutionSequence(): ?float
    {
        return $this->executionSequence;
    }

    public function setExecutionSequence(?float $executionSequence): self
    {
        $this->executionSequence = $executionSequence;
        return $this;
    }

    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;
        return $this;
    }

    public function getTaskDefinitionId(): ?string
    {
        return $this->taskDefinitionId;
    }

    public function setTaskDefinitionId(?string $taskDefinitionId): self
    {
        $this->taskDefinitionId = $taskDefinitionId;
        return $this;
    }

    public function getTaskProcessingResults(): ?string
    {
        return $this->taskProcessingResults;
    }

    public function setTaskProcessingResults(?string $taskProcessingResults): self
    {
        $this->taskProcessingResults = $taskProcessingResults;
        return $this;
    }

}

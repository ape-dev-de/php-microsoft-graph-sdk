<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceWorkflowTemplate
 */
class IdentityGovernanceWorkflowTemplate
{
    /**
     */
    private ?string $category;

    /**
     * The description of the workflowTemplate.
     */
    private ?string $description;

    /**
     * The display name of the workflowTemplate.Supports $filter(eq, ne) and $orderby.
     */
    private ?string $displayName;

    /**
     * Conditions describing when to execute the workflow and the criteria to identify in-scope subject set.
     */
    private ?string $executionConditions;

    /**
     * Represents the configured tasks to execute and their execution sequence within a workflow. This relationship is expanded by default.
     * @var string[]
     */
    private array $tasks = [];


    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): self
    {
        $this->category = $category;
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

    public function getExecutionConditions(): ?string
    {
        return $this->executionConditions;
    }

    public function setExecutionConditions(?string $executionConditions): self
    {
        $this->executionConditions = $executionConditions;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTasks(): array
    {
        return $this->tasks;
    }

    /**
     * @param string[] $tasks
     */
    public function setTasks(array $tasks): self
    {
        $this->tasks = $tasks;
        return $this;
    }

}

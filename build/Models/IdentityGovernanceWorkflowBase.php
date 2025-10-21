<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceWorkflowBase
 */
class IdentityGovernanceWorkflowBase
{
    /**
     */
    private ?string $category;

    /**
     * When a workflow was created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * A string that describes the purpose of the workflow.
     */
    private ?string $description;

    /**
     * A string to identify the workflow.
     */
    private ?string $displayName;

    /**
     * Defines when and for who the workflow will run.
     */
    private ?string $executionConditions;

    /**
     * Whether the workflow is enabled or disabled. If this setting is true, the workflow can be run on demand or on schedule when isSchedulingEnabled is true.
     */
    private ?bool $isEnabled;

    /**
     * If true, the Lifecycle Workflow engine executes the workflow based on the schedule defined by tenant settings. Can''t be true for a disabled workflow (where isEnabled is false).
     */
    private ?bool $isSchedulingEnabled;

    /**
     * When the workflow was last modified.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The user who created the workflow.
     */
    private ?string $createdBy;

    /**
     * The unique identifier of the Microsoft Entra identity that last modified the workflow.
     */
    private ?string $lastModifiedBy;

    /**
     * The tasks in the workflow.
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

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
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

    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;
        return $this;
    }

    public function getIsSchedulingEnabled(): ?bool
    {
        return $this->isSchedulingEnabled;
    }

    public function setIsSchedulingEnabled(?bool $isSchedulingEnabled): self
    {
        $this->isSchedulingEnabled = $isSchedulingEnabled;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    public function getLastModifiedBy(): ?string
    {
        return $this->lastModifiedBy;
    }

    public function setLastModifiedBy(?string $lastModifiedBy): self
    {
        $this->lastModifiedBy = $lastModifiedBy;
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

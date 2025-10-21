<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceLifecycleWorkflowsContainer
 */
class IdentityGovernanceLifecycleWorkflowsContainer
{
    /**
     * The customTaskExtension instance.
     */
    private array $customTaskExtensions = [];

    /**
     * Deleted workflows in your lifecycle workflows instance.
     */
    private ?string $deletedItems;

    /**
     * The insight container holding workflow insight summaries for a tenant.
     */
    private ?string $insights;

    /**
     */
    private ?string $settings;

    /**
     * The definition of tasks within the lifecycle workflows instance.
     */
    private array $taskDefinitions = [];

    /**
     * The workflows in the lifecycle workflows instance.
     */
    private array $workflows = [];

    /**
     * The workflow templates in the lifecycle workflow instance.
     * @var string[]
     */
    private array $workflowTemplates = [];


    public function getCustomTaskExtensions(): array
    {
        return $this->customTaskExtensions;
    }

    public function setCustomTaskExtensions(array $customTaskExtensions): self
    {
        $this->customTaskExtensions = $customTaskExtensions;
        return $this;
    }

    public function getDeletedItems(): ?string
    {
        return $this->deletedItems;
    }

    public function setDeletedItems(?string $deletedItems): self
    {
        $this->deletedItems = $deletedItems;
        return $this;
    }

    public function getInsights(): ?string
    {
        return $this->insights;
    }

    public function setInsights(?string $insights): self
    {
        $this->insights = $insights;
        return $this;
    }

    public function getSettings(): ?string
    {
        return $this->settings;
    }

    public function setSettings(?string $settings): self
    {
        $this->settings = $settings;
        return $this;
    }

    public function getTaskDefinitions(): array
    {
        return $this->taskDefinitions;
    }

    public function setTaskDefinitions(array $taskDefinitions): self
    {
        $this->taskDefinitions = $taskDefinitions;
        return $this;
    }

    public function getWorkflows(): array
    {
        return $this->workflows;
    }

    public function setWorkflows(array $workflows): self
    {
        $this->workflows = $workflows;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getWorkflowTemplates(): array
    {
        return $this->workflowTemplates;
    }

    /**
     * @param string[] $workflowTemplates
     */
    public function setWorkflowTemplates(array $workflowTemplates): self
    {
        $this->workflowTemplates = $workflowTemplates;
        return $this;
    }

}

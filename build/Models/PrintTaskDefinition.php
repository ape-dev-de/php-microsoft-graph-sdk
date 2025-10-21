<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintTaskDefinition
 */
class PrintTaskDefinition
{
    /**
     */
    private ?string $createdBy;

    /**
     * The name of the printTaskDefinition.
     */
    private ?string $displayName;

    /**
     * A list of tasks that have been created based on this definition. The list includes currently running tasks and recently completed tasks. Read-only.
     * @var string[]
     */
    private array $tasks = [];


    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
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

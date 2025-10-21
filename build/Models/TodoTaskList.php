<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TodoTaskList
 */
class TodoTaskList
{
    /**
     * The name of the task list.
     */
    private ?string $displayName;

    /**
     * True if the user is owner of the given task list.
     */
    private ?bool $isOwner;

    /**
     * True if the task list is shared with other users
     */
    private ?bool $isShared;

    /**
     */
    private ?string $wellknownListName;

    /**
     * The collection of open extensions defined for the task list. Nullable.
     */
    private array $extensions = [];

    /**
     * The tasks in this task list. Read-only. Nullable.
     * @var string[]
     */
    private array $tasks = [];


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getIsOwner(): ?bool
    {
        return $this->isOwner;
    }

    public function setIsOwner(?bool $isOwner): self
    {
        $this->isOwner = $isOwner;
        return $this;
    }

    public function getIsShared(): ?bool
    {
        return $this->isShared;
    }

    public function setIsShared(?bool $isShared): self
    {
        $this->isShared = $isShared;
        return $this;
    }

    public function getWellknownListName(): ?string
    {
        return $this->wellknownListName;
    }

    public function setWellknownListName(?string $wellknownListName): self
    {
        $this->wellknownListName = $wellknownListName;
        return $this;
    }

    public function getExtensions(): array
    {
        return $this->extensions;
    }

    public function setExtensions(array $extensions): self
    {
        $this->extensions = $extensions;
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

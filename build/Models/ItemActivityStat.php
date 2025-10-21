<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ItemActivityStat
 */
class ItemActivityStat
{
    /**
     * Statistics about the access actions in this interval. Read-only.
     */
    private ?string $access;

    /**
     * Statistics about the create actions in this interval. Read-only.
     */
    private ?string $create;

    /**
     * Statistics about the delete actions in this interval. Read-only.
     */
    private ?string $delete;

    /**
     * Statistics about the edit actions in this interval. Read-only.
     */
    private ?string $edit;

    /**
     * When the interval ends. Read-only.
     */
    private ?\DateTimeInterface $endDateTime;

    /**
     * Indicates that the statistics in this interval are based on incomplete data. Read-only.
     */
    private ?string $incompleteData;

    /**
     * Indicates whether the item is 'trending.' Read-only.
     */
    private ?bool $isTrending;

    /**
     * Statistics about the move actions in this interval. Read-only.
     */
    private ?string $move;

    /**
     * When the interval starts. Read-only.
     */
    private ?\DateTimeInterface $startDateTime;

    /**
     * Exposes the itemActivities represented in this itemActivityStat resource.
     * @var string[]
     */
    private array $activities = [];


    public function getAccess(): ?string
    {
        return $this->access;
    }

    public function setAccess(?string $access): self
    {
        $this->access = $access;
        return $this;
    }

    public function getCreate(): ?string
    {
        return $this->create;
    }

    public function setCreate(?string $create): self
    {
        $this->create = $create;
        return $this;
    }

    public function getDelete(): ?string
    {
        return $this->delete;
    }

    public function setDelete(?string $delete): self
    {
        $this->delete = $delete;
        return $this;
    }

    public function getEdit(): ?string
    {
        return $this->edit;
    }

    public function setEdit(?string $edit): self
    {
        $this->edit = $edit;
        return $this;
    }

    public function getEndDateTime(): ?\DateTimeInterface
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?\DateTimeInterface $endDateTime): self
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }

    public function getIncompleteData(): ?string
    {
        return $this->incompleteData;
    }

    public function setIncompleteData(?string $incompleteData): self
    {
        $this->incompleteData = $incompleteData;
        return $this;
    }

    public function getIsTrending(): ?bool
    {
        return $this->isTrending;
    }

    public function setIsTrending(?bool $isTrending): self
    {
        $this->isTrending = $isTrending;
        return $this;
    }

    public function getMove(): ?string
    {
        return $this->move;
    }

    public function setMove(?string $move): self
    {
        $this->move = $move;
        return $this;
    }

    public function getStartDateTime(): ?\DateTimeInterface
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?\DateTimeInterface $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getActivities(): array
    {
        return $this->activities;
    }

    /**
     * @param string[] $activities
     */
    public function setActivities(array $activities): self
    {
        $this->activities = $activities;
        return $this;
    }

}

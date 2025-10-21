<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerChecklistItem
 */
class PlannerChecklistItem
{
    /**
     * Value is true if the item is checked and false otherwise.
     */
    private ?bool $isChecked;

    /**
     * Read-only. User ID by which this is last modified.
     */
    private ?string $lastModifiedBy;

    /**
     * Read-only. Date and time at which this is last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * Used to set the relative order of items in the checklist. The format is defined as outlined here.
     */
    private ?string $orderHint;

    /**
     * Title of the checklist item
     */
    private ?string $title;


    public function getIsChecked(): ?bool
    {
        return $this->isChecked;
    }

    public function setIsChecked(?bool $isChecked): self
    {
        $this->isChecked = $isChecked;
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

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getOrderHint(): ?string
    {
        return $this->orderHint;
    }

    public function setOrderHint(?string $orderHint): self
    {
        $this->orderHint = $orderHint;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

}

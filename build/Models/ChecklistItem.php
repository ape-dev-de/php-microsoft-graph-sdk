<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChecklistItem
 */
class ChecklistItem
{
    /**
     * The date and time when the checklistItem was finished.
     */
    private ?\DateTimeInterface $checkedDateTime;

    /**
     * The date and time when the checklistItem was created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Indicates the title of the checklistItem.
     */
    private ?string $displayName;

    /**
     * State that indicates whether the item is checked off or not.
     */
    private ?string $isChecked;

    public function getCheckedDateTime(): ?\DateTimeInterface
    {
        return $this->checkedDateTime;
    }

    public function setCheckedDateTime(?\DateTimeInterface $checkedDateTime): self
    {
        $this->checkedDateTime = $checkedDateTime;
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

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getIsChecked(): ?string
    {
        return $this->isChecked;
    }

    public function setIsChecked(?string $isChecked): self
    {
        $this->isChecked = $isChecked;
        return $this;
    }

}

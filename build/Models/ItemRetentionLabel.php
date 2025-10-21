<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ItemRetentionLabel
 */
class ItemRetentionLabel
{
    /**
     * Specifies whether the label is applied explicitly on the item. True indicates that the label is applied explicitly; otherwise, the label is inherited from its parent. Read-only.
     */
    private ?bool $isLabelAppliedExplicitly;

    /**
     * Identity of the user who applied the label. Read-only.
     */
    private ?string $labelAppliedBy;

    /**
     * The date and time when the label was applied on the item. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $labelAppliedDateTime;

    /**
     * The retention label on the document. Read-write.
     */
    private ?string $name;

    /**
     * The retention settings enforced on the item. Read-write.
     */
    private ?string $retentionSettings;


    public function getIsLabelAppliedExplicitly(): ?bool
    {
        return $this->isLabelAppliedExplicitly;
    }

    public function setIsLabelAppliedExplicitly(?bool $isLabelAppliedExplicitly): self
    {
        $this->isLabelAppliedExplicitly = $isLabelAppliedExplicitly;
        return $this;
    }

    public function getLabelAppliedBy(): ?string
    {
        return $this->labelAppliedBy;
    }

    public function setLabelAppliedBy(?string $labelAppliedBy): self
    {
        $this->labelAppliedBy = $labelAppliedBy;
        return $this;
    }

    public function getLabelAppliedDateTime(): ?\DateTimeInterface
    {
        return $this->labelAppliedDateTime;
    }

    public function setLabelAppliedDateTime(?\DateTimeInterface $labelAppliedDateTime): self
    {
        $this->labelAppliedDateTime = $labelAppliedDateTime;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getRetentionSettings(): ?string
    {
        return $this->retentionSettings;
    }

    public function setRetentionSettings(?string $retentionSettings): self
    {
        $this->retentionSettings = $retentionSettings;
        return $this;
    }

}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RetentionLabelSettings
 */
class RetentionLabelSettings
{
    /**
     * Describes the item behavior during retention period. Possible values are: doNotRetain, retain, retainAsRecord, retainAsRegulatoryRecord, unknownFutureValue. Read-only.
     */
    private ?string $behaviorDuringRetentionPeriod;

    /**
     * Specifies whether updates to document content are allowed. Read-only.
     */
    private ?bool $isContentUpdateAllowed;

    /**
     * Specifies whether the document deletion is allowed. Read-only.
     */
    private ?bool $isDeleteAllowed;

    /**
     * Specifies whether you're allowed to change the retention label on the document. Read-only.
     */
    private ?bool $isLabelUpdateAllowed;

    /**
     * Specifies whether updates to the item metadata (for example, the Title field) are blocked. Read-only.
     */
    private ?bool $isMetadataUpdateAllowed;

    /**
     * Specifies whether the item is locked. Read-write.
     */
    private ?string $isRecordLocked;

    public function getBehaviorDuringRetentionPeriod(): ?string
    {
        return $this->behaviorDuringRetentionPeriod;
    }

    public function setBehaviorDuringRetentionPeriod(?string $behaviorDuringRetentionPeriod): self
    {
        $this->behaviorDuringRetentionPeriod = $behaviorDuringRetentionPeriod;
        return $this;
    }

    public function getIsContentUpdateAllowed(): ?bool
    {
        return $this->isContentUpdateAllowed;
    }

    public function setIsContentUpdateAllowed(?bool $isContentUpdateAllowed): self
    {
        $this->isContentUpdateAllowed = $isContentUpdateAllowed;
        return $this;
    }

    public function getIsDeleteAllowed(): ?bool
    {
        return $this->isDeleteAllowed;
    }

    public function setIsDeleteAllowed(?bool $isDeleteAllowed): self
    {
        $this->isDeleteAllowed = $isDeleteAllowed;
        return $this;
    }

    public function getIsLabelUpdateAllowed(): ?bool
    {
        return $this->isLabelUpdateAllowed;
    }

    public function setIsLabelUpdateAllowed(?bool $isLabelUpdateAllowed): self
    {
        $this->isLabelUpdateAllowed = $isLabelUpdateAllowed;
        return $this;
    }

    public function getIsMetadataUpdateAllowed(): ?bool
    {
        return $this->isMetadataUpdateAllowed;
    }

    public function setIsMetadataUpdateAllowed(?bool $isMetadataUpdateAllowed): self
    {
        $this->isMetadataUpdateAllowed = $isMetadataUpdateAllowed;
        return $this;
    }

    public function getIsRecordLocked(): ?string
    {
        return $this->isRecordLocked;
    }

    public function setIsRecordLocked(?string $isRecordLocked): self
    {
        $this->isRecordLocked = $isRecordLocked;
        return $this;
    }

}

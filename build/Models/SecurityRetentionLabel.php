<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityRetentionLabel
 */
class SecurityRetentionLabel
{
    /**
     * Specifies the action to take on the labeled document after the period specified by the retentionDuration property expires. The possible values are: none, delete, startDispositionReview, unknownFutureValue.
     */
    private ?string $actionAfterRetentionPeriod;

    /**
     * Specifies how the behavior of a document with this label should be during the retention period. The possible values are: doNotRetain, retain, retainAsRecord, retainAsRegulatoryRecord, unknownFutureValue.
     */
    private ?string $behaviorDuringRetentionPeriod;

    /**
     * Represents the user who created the retentionLabel.
     */
    private ?string $createdBy;

    /**
     * Represents the date and time in which the retentionLabel is created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Specifies the locked or unlocked state of a record label when it is created.The possible values are: startLocked, startUnlocked, unknownFutureValue.
     */
    private ?string $defaultRecordBehavior;

    /**
     * Provides label information for the admin. Optional.
     */
    private ?string $descriptionForAdmins;

    /**
     * Provides the label information for the user. Optional.
     */
    private ?string $descriptionForUsers;

    /**
     * Unique string that defines a label name.
     */
    private ?string $displayName;

    /**
     * Specifies whether the label is currently being used.
     */
    private ?bool $isInUse;

    /**
     * Specifies the replacement label to be applied automatically after the retention period of the current label ends.
     */
    private ?string $labelToBeApplied;

    /**
     * The user who last modified the retentionLabel.
     */
    private ?string $lastModifiedBy;

    /**
     * The latest date time when the retentionLabel was modified.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * Specifies the number of days to retain the content.
     */
    private ?string $retentionDuration;

    /**
     * Specifies whether the retention duration is calculated from the content creation date, labeled date, or last modification date. The possible values are: dateLabeled, dateCreated, dateModified, dateOfEvent, unknownFutureValue.
     */
    private ?string $retentionTrigger;

    /**
     * Represents out-of-the-box values that provide more options to improve the manageability and organization of the content you need to label.
     */
    private ?string $descriptors;

    /**
     * When action at the end of retention is chosen as ''dispositionReview'', dispositionReviewStages specifies a sequential set of stages with at least one reviewer in each stage.
     */
    private array $dispositionReviewStages = [];

    /**
     * Represents the type associated with a retention event.
     */
    private ?string $retentionEventType;


    public function getActionAfterRetentionPeriod(): ?string
    {
        return $this->actionAfterRetentionPeriod;
    }

    public function setActionAfterRetentionPeriod(?string $actionAfterRetentionPeriod): self
    {
        $this->actionAfterRetentionPeriod = $actionAfterRetentionPeriod;
        return $this;
    }

    public function getBehaviorDuringRetentionPeriod(): ?string
    {
        return $this->behaviorDuringRetentionPeriod;
    }

    public function setBehaviorDuringRetentionPeriod(?string $behaviorDuringRetentionPeriod): self
    {
        $this->behaviorDuringRetentionPeriod = $behaviorDuringRetentionPeriod;
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

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getDefaultRecordBehavior(): ?string
    {
        return $this->defaultRecordBehavior;
    }

    public function setDefaultRecordBehavior(?string $defaultRecordBehavior): self
    {
        $this->defaultRecordBehavior = $defaultRecordBehavior;
        return $this;
    }

    public function getDescriptionForAdmins(): ?string
    {
        return $this->descriptionForAdmins;
    }

    public function setDescriptionForAdmins(?string $descriptionForAdmins): self
    {
        $this->descriptionForAdmins = $descriptionForAdmins;
        return $this;
    }

    public function getDescriptionForUsers(): ?string
    {
        return $this->descriptionForUsers;
    }

    public function setDescriptionForUsers(?string $descriptionForUsers): self
    {
        $this->descriptionForUsers = $descriptionForUsers;
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

    public function getIsInUse(): ?bool
    {
        return $this->isInUse;
    }

    public function setIsInUse(?bool $isInUse): self
    {
        $this->isInUse = $isInUse;
        return $this;
    }

    public function getLabelToBeApplied(): ?string
    {
        return $this->labelToBeApplied;
    }

    public function setLabelToBeApplied(?string $labelToBeApplied): self
    {
        $this->labelToBeApplied = $labelToBeApplied;
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

    public function getRetentionDuration(): ?string
    {
        return $this->retentionDuration;
    }

    public function setRetentionDuration(?string $retentionDuration): self
    {
        $this->retentionDuration = $retentionDuration;
        return $this;
    }

    public function getRetentionTrigger(): ?string
    {
        return $this->retentionTrigger;
    }

    public function setRetentionTrigger(?string $retentionTrigger): self
    {
        $this->retentionTrigger = $retentionTrigger;
        return $this;
    }

    public function getDescriptors(): ?string
    {
        return $this->descriptors;
    }

    public function setDescriptors(?string $descriptors): self
    {
        $this->descriptors = $descriptors;
        return $this;
    }

    public function getDispositionReviewStages(): array
    {
        return $this->dispositionReviewStages;
    }

    public function setDispositionReviewStages(array $dispositionReviewStages): self
    {
        $this->dispositionReviewStages = $dispositionReviewStages;
        return $this;
    }

    public function getRetentionEventType(): ?string
    {
        return $this->retentionEventType;
    }

    public function setRetentionEventType(?string $retentionEventType): self
    {
        $this->retentionEventType = $retentionEventType;
        return $this;
    }

}

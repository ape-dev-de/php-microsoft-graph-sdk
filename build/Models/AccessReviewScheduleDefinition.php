<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewScheduleDefinition
 */
class AccessReviewScheduleDefinition
{
    /**
     * Defines the list of additional users or group members to be notified of the access review progress.
     */
    private array $additionalNotificationRecipients = [];

    /**
     * User who created this review. Read-only.
     */
    private ?string $createdBy;

    /**
     * Timestamp when the access review series was created. Supports $select. Read-only.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Description provided by review creators to provide more context of the review to admins. Supports $select.
     */
    private ?string $descriptionForAdmins;

    /**
     * Description provided  by review creators to provide more context of the review to reviewers. Reviewers see this description in the email sent to them requesting their review. Email notifications support up to 256 characters. Supports $select.
     */
    private ?string $descriptionForReviewers;

    /**
     * Name of the access review series. Supports $select and $orderby. Required on create.
     */
    private ?string $displayName;

    /**
     * This collection of reviewer scopes is used to define the list of fallback reviewers. These fallback reviewers are notified to take action if no users are found from the list of reviewers specified. This could occur when either the group owner is specified as the reviewer but the group owner doesn''t exist, or manager is specified as reviewer but a user''s manager doesn''t exist. See accessReviewReviewerScope. Replaces backupReviewers. Supports $select. NOTE: The value of this property will be ignored if fallback reviewers are assigned through the stageSettings property.
     */
    private array $fallbackReviewers = [];

    /**
     * This property is required when scoping a review to guest users'' access across all Microsoft 365 groups and determines which Microsoft 365 groups are reviewed. Each group becomes a unique accessReviewInstance of the access review series.  For supported scopes, see accessReviewScope. Supports $select. For examples of options for configuring instanceEnumerationScope, see Configure the scope of your access review definition using the Microsoft Graph API.
     */
    private ?string $instanceEnumerationScope;

    /**
     * Timestamp when the access review series was last modified. Supports $select. Read-only.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * This collection of access review scopes is used to define who are the reviewers. The reviewers property is only updatable if individual users are assigned as reviewers. Required on create. Supports $select. For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API. NOTE: The value of this property will be ignored if reviewers are assigned through the stageSettings property.
     */
    private array $reviewers = [];

    /**
     * Defines the entities whose access is reviewed. For supported scopes, see accessReviewScope. Required on create. Supports $select and $filter (contains only). For examples of options for configuring scope, see Configure the scope of your access review definition using the Microsoft Graph API.
     */
    private ?string $scope;

    /**
     * The settings for an access review series, see type definition below. Supports $select. Required on create.
     */
    private ?string $settings;

    /**
     * Required only for a multi-stage access review to define the stages and their settings. You can break down each review instance into up to three sequential stages, where each stage can have a different set of reviewers, fallback reviewers, and settings. Stages are created sequentially based on the dependsOn property. Optional.  When this property is defined, its settings are used instead of the corresponding settings in the accessReviewScheduleDefinition object and its settings, reviewers, and fallbackReviewers properties.
     */
    private array $stageSettings = [];

    /**
     * This read-only field specifies the status of an access review. The typical states include Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed.  Supports $select, $orderby, and $filter (eq only). Read-only.
     */
    private ?string $status;

    /**
     * If the accessReviewScheduleDefinition is a recurring access review, instances represent each recurrence. A review that doesn''t recur will have exactly one instance. Instances also represent each unique resource under review in the accessReviewScheduleDefinition. If a review has multiple resources and multiple instances, each resource has a unique instance for each recurrence.
     */
    private ?string $instances;

    public function getAdditionalNotificationRecipients(): array
    {
        return $this->additionalNotificationRecipients;
    }

    public function setAdditionalNotificationRecipients(array $additionalNotificationRecipients): self
    {
        $this->additionalNotificationRecipients = $additionalNotificationRecipients;
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

    public function getDescriptionForAdmins(): ?string
    {
        return $this->descriptionForAdmins;
    }

    public function setDescriptionForAdmins(?string $descriptionForAdmins): self
    {
        $this->descriptionForAdmins = $descriptionForAdmins;
        return $this;
    }

    public function getDescriptionForReviewers(): ?string
    {
        return $this->descriptionForReviewers;
    }

    public function setDescriptionForReviewers(?string $descriptionForReviewers): self
    {
        $this->descriptionForReviewers = $descriptionForReviewers;
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

    public function getFallbackReviewers(): array
    {
        return $this->fallbackReviewers;
    }

    public function setFallbackReviewers(array $fallbackReviewers): self
    {
        $this->fallbackReviewers = $fallbackReviewers;
        return $this;
    }

    public function getInstanceEnumerationScope(): ?string
    {
        return $this->instanceEnumerationScope;
    }

    public function setInstanceEnumerationScope(?string $instanceEnumerationScope): self
    {
        $this->instanceEnumerationScope = $instanceEnumerationScope;
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

    public function getReviewers(): array
    {
        return $this->reviewers;
    }

    public function setReviewers(array $reviewers): self
    {
        $this->reviewers = $reviewers;
        return $this;
    }

    public function getScope(): ?string
    {
        return $this->scope;
    }

    public function setScope(?string $scope): self
    {
        $this->scope = $scope;
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

    public function getStageSettings(): array
    {
        return $this->stageSettings;
    }

    public function setStageSettings(array $stageSettings): self
    {
        $this->stageSettings = $stageSettings;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getInstances(): ?string
    {
        return $this->instances;
    }

    public function setInstances(?string $instances): self
    {
        $this->instances = $instances;
        return $this;
    }

}

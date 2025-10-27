<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewScheduleDefinition
 */
class AccessReviewScheduleDefinition
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Defines the list of additional users or group members to be notified of the access review progress.
     * @var AccessReviewNotificationRecipientItem[]
     */
    public array $additionalNotificationRecipients = [];

    /** 
     * User who created this review. Read-only.
     * @var UserIdentity|\stdClass|null
     */
    public mixed $createdBy = null;

    /** Timestamp when the access review series was created. Supports $select. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Description provided by review creators to provide more context of the review to admins. Supports $select. */
    public ?string $descriptionForAdmins = null;

    /** Description provided  by review creators to provide more context of the review to reviewers. Reviewers see this description in the email sent to them requesting their review. Email notifications support up to 256 characters. Supports $select. */
    public ?string $descriptionForReviewers = null;

    /** Name of the access review series. Supports $select and $orderby. Required on create. */
    public ?string $displayName = null;

    /** 
     * This collection of reviewer scopes is used to define the list of fallback reviewers. These fallback reviewers are notified to take action if no users are found from the list of reviewers specified. This could occur when either the group owner is specified as the reviewer but the group owner doesn't exist, or manager is specified as reviewer but a user's manager doesn't exist. See accessReviewReviewerScope. Replaces backupReviewers. Supports $select. NOTE: The value of this property will be ignored if fallback reviewers are assigned through the stageSettings property.
     * @var AccessReviewReviewerScope[]
     */
    public array $fallbackReviewers = [];

    /** 
     * This property is required when scoping a review to guest users' access across all Microsoft 365 groups and determines which Microsoft 365 groups are reviewed. Each group becomes a unique accessReviewInstance of the access review series.  For supported scopes, see accessReviewScope. Supports $select. For examples of options for configuring instanceEnumerationScope, see Configure the scope of your access review definition using the Microsoft Graph API.
     * @var AccessReviewScope|\stdClass|null
     */
    public mixed $instanceEnumerationScope = null;

    /** Timestamp when the access review series was last modified. Supports $select. Read-only. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * This collection of access review scopes is used to define who are the reviewers. The reviewers property is only updatable if individual users are assigned as reviewers. Required on create. Supports $select. For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API. NOTE: The value of this property will be ignored if reviewers are assigned through the stageSettings property.
     * @var AccessReviewReviewerScope[]
     */
    public array $reviewers = [];

    /** 
     * Defines the entities whose access is reviewed. For supported scopes, see accessReviewScope. Required on create. Supports $select and $filter (contains only). For examples of options for configuring scope, see Configure the scope of your access review definition using the Microsoft Graph API.
     * @var AccessReviewScope|\stdClass|null
     */
    public mixed $scope = null;

    /** 
     * The settings for an access review series, see type definition below. Supports $select. Required on create.
     * @var AccessReviewScheduleSettings|\stdClass|null
     */
    public mixed $settings = null;

    /** 
     * Required only for a multi-stage access review to define the stages and their settings. You can break down each review instance into up to three sequential stages, where each stage can have a different set of reviewers, fallback reviewers, and settings. Stages are created sequentially based on the dependsOn property. Optional.  When this property is defined, its settings are used instead of the corresponding settings in the accessReviewScheduleDefinition object and its settings, reviewers, and fallbackReviewers properties.
     * @var AccessReviewStageSettings[]
     */
    public array $stageSettings = [];

    /** This read-only field specifies the status of an access review. The typical states include Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed.  Supports $select, $orderby, and $filter (eq only). Read-only. */
    public ?string $status = null;

    /** 
     * If the accessReviewScheduleDefinition is a recurring access review, instances represent each recurrence. A review that doesn't recur will have exactly one instance. Instances also represent each unique resource under review in the accessReviewScheduleDefinition. If a review has multiple resources and multiple instances, each resource has a unique instance for each recurrence.
     * @var AccessReviewInstance[]
     */
    public array $instances = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['additionalNotificationRecipients'])) {
            $this->additionalNotificationRecipients = $data['additionalNotificationRecipients'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new UserIdentity($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['descriptionForAdmins'])) {
            $this->descriptionForAdmins = $data['descriptionForAdmins'];
        }
        if (isset($data['descriptionForReviewers'])) {
            $this->descriptionForReviewers = $data['descriptionForReviewers'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['fallbackReviewers'])) {
            $this->fallbackReviewers = $data['fallbackReviewers'];
        }
        if (isset($data['instanceEnumerationScope'])) {
            $this->instanceEnumerationScope = is_array($data['instanceEnumerationScope']) ? new AccessReviewScope($data['instanceEnumerationScope']) : $data['instanceEnumerationScope'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['reviewers'])) {
            $this->reviewers = $data['reviewers'];
        }
        if (isset($data['scope'])) {
            $this->scope = is_array($data['scope']) ? new AccessReviewScope($data['scope']) : $data['scope'];
        }
        if (isset($data['settings'])) {
            $this->settings = is_array($data['settings']) ? new AccessReviewScheduleSettings($data['settings']) : $data['settings'];
        }
        if (isset($data['stageSettings'])) {
            $this->stageSettings = $data['stageSettings'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['instances'])) {
            $this->instances = $data['instances'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}

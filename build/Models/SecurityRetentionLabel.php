<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityRetentionLabel
 */
class SecurityRetentionLabel
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Specifies the action to take on the labeled document after the period specified by the retentionDuration property expires. The possible values are: none, delete, startDispositionReview, unknownFutureValue.
     * @var SecurityActionAfterRetentionPeriod|\stdClass|null
     */
    public SecurityActionAfterRetentionPeriod|\stdClass|null $actionAfterRetentionPeriod = null;

    /** 
     * Specifies how the behavior of a document with this label should be during the retention period. The possible values are: doNotRetain, retain, retainAsRecord, retainAsRegulatoryRecord, unknownFutureValue.
     * @var SecurityBehaviorDuringRetentionPeriod|\stdClass|null
     */
    public SecurityBehaviorDuringRetentionPeriod|\stdClass|null $behaviorDuringRetentionPeriod = null;

    /** 
     * Represents the user who created the retentionLabel.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $createdBy = null;

    /** Represents the date and time in which the retentionLabel is created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Specifies the locked or unlocked state of a record label when it is created.The possible values are: startLocked, startUnlocked, unknownFutureValue.
     * @var SecurityDefaultRecordBehavior|\stdClass|null
     */
    public SecurityDefaultRecordBehavior|\stdClass|null $defaultRecordBehavior = null;

    /** Provides label information for the admin. Optional. */
    public ?string $descriptionForAdmins = null;

    /** Provides the label information for the user. Optional. */
    public ?string $descriptionForUsers = null;

    /** Unique string that defines a label name. */
    public ?string $displayName = null;

    /** Specifies whether the label is currently being used. */
    public ?bool $isInUse = null;

    /** Specifies the replacement label to be applied automatically after the retention period of the current label ends. */
    public ?string $labelToBeApplied = null;

    /** 
     * The user who last modified the retentionLabel.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $lastModifiedBy = null;

    /** The latest date time when the retentionLabel was modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * Specifies the number of days to retain the content.
     * @var SecurityRetentionDuration|\stdClass|null
     */
    public SecurityRetentionDuration|\stdClass|null $retentionDuration = null;

    /** 
     * Specifies whether the retention duration is calculated from the content creation date, labeled date, or last modification date. The possible values are: dateLabeled, dateCreated, dateModified, dateOfEvent, unknownFutureValue.
     * @var SecurityRetentionTrigger|\stdClass|null
     */
    public SecurityRetentionTrigger|\stdClass|null $retentionTrigger = null;

    /** 
     * Represents out-of-the-box values that provide more options to improve the manageability and organization of the content you need to label.
     * @var SecurityFilePlanDescriptor|\stdClass|null
     */
    public SecurityFilePlanDescriptor|\stdClass|null $descriptors = null;

    /** 
     * When action at the end of retention is chosen as 'dispositionReview', dispositionReviewStages specifies a sequential set of stages with at least one reviewer in each stage.
     * @var SecurityDispositionReviewStage[]
     */
    public array $dispositionReviewStages = [];

    /** 
     * Represents the type associated with a retention event.
     * @var SecurityRetentionEventType|\stdClass|null
     */
    public SecurityRetentionEventType|\stdClass|null $retentionEventType = null;


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
        if (isset($data['actionAfterRetentionPeriod'])) {
            $this->actionAfterRetentionPeriod = is_array($data['actionAfterRetentionPeriod']) ? new SecurityActionAfterRetentionPeriod($data['actionAfterRetentionPeriod']) : $data['actionAfterRetentionPeriod'];
        }
        if (isset($data['behaviorDuringRetentionPeriod'])) {
            $this->behaviorDuringRetentionPeriod = is_array($data['behaviorDuringRetentionPeriod']) ? new SecurityBehaviorDuringRetentionPeriod($data['behaviorDuringRetentionPeriod']) : $data['behaviorDuringRetentionPeriod'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new IdentitySet($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['defaultRecordBehavior'])) {
            $this->defaultRecordBehavior = is_array($data['defaultRecordBehavior']) ? new SecurityDefaultRecordBehavior($data['defaultRecordBehavior']) : $data['defaultRecordBehavior'];
        }
        if (isset($data['descriptionForAdmins'])) {
            $this->descriptionForAdmins = $data['descriptionForAdmins'];
        }
        if (isset($data['descriptionForUsers'])) {
            $this->descriptionForUsers = $data['descriptionForUsers'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isInUse'])) {
            $this->isInUse = is_bool($data['isInUse']) ? $data['isInUse'] : (bool)$data['isInUse'];
        }
        if (isset($data['labelToBeApplied'])) {
            $this->labelToBeApplied = $data['labelToBeApplied'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new IdentitySet($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['retentionDuration'])) {
            $this->retentionDuration = is_array($data['retentionDuration']) ? new SecurityRetentionDuration($data['retentionDuration']) : $data['retentionDuration'];
        }
        if (isset($data['retentionTrigger'])) {
            $this->retentionTrigger = is_array($data['retentionTrigger']) ? new SecurityRetentionTrigger($data['retentionTrigger']) : $data['retentionTrigger'];
        }
        if (isset($data['descriptors'])) {
            $this->descriptors = is_array($data['descriptors']) ? new SecurityFilePlanDescriptor($data['descriptors']) : $data['descriptors'];
        }
        if (isset($data['dispositionReviewStages'])) {
            $this->dispositionReviewStages = $data['dispositionReviewStages'];
        }
        if (isset($data['retentionEventType'])) {
            $this->retentionEventType = is_array($data['retentionEventType']) ? new SecurityRetentionEventType($data['retentionEventType']) : $data['retentionEventType'];
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

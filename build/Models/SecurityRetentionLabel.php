<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityRetentionLabel
 */
class SecurityRetentionLabel
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Specifies the action to take on the labeled document after the period specified by the retentionDuration property expires. The possible values are: none, delete, startDispositionReview, unknownFutureValue. */
        public ?SecurityActionAfterRetentionPeriod $actionAfterRetentionPeriod = null,
        /** Specifies how the behavior of a document with this label should be during the retention period. The possible values are: doNotRetain, retain, retainAsRecord, retainAsRegulatoryRecord, unknownFutureValue. */
        public ?SecurityBehaviorDuringRetentionPeriod $behaviorDuringRetentionPeriod = null,
        /** Represents the user who created the retentionLabel. */
        public ?IdentitySet $createdBy = null,
        /** Represents the date and time in which the retentionLabel is created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Specifies the locked or unlocked state of a record label when it is created.The possible values are: startLocked, startUnlocked, unknownFutureValue. */
        public ?SecurityDefaultRecordBehavior $defaultRecordBehavior = null,
        /** Provides label information for the admin. Optional. */
        public ?string $descriptionForAdmins = null,
        /** Provides the label information for the user. Optional. */
        public ?string $descriptionForUsers = null,
        /** Unique string that defines a label name. */
        public ?string $displayName = null,
        /** Specifies whether the label is currently being used. */
        public ?bool $isInUse = null,
        /** Specifies the replacement label to be applied automatically after the retention period of the current label ends. */
        public ?string $labelToBeApplied = null,
        /** The user who last modified the retentionLabel. */
        public ?IdentitySet $lastModifiedBy = null,
        /** The latest date time when the retentionLabel was modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Specifies the number of days to retain the content. */
        public ?SecurityRetentionDuration $retentionDuration = null,
        /** Specifies whether the retention duration is calculated from the content creation date, labeled date, or last modification date. The possible values are: dateLabeled, dateCreated, dateModified, dateOfEvent, unknownFutureValue. */
        public ?SecurityRetentionTrigger $retentionTrigger = null,
        /** Represents out-of-the-box values that provide more options to improve the manageability and organization of the content you need to label. */
        public ?SecurityFilePlanDescriptor $descriptors = null,
        /** When action at the end of retention is chosen as 'dispositionReview', dispositionReviewStages specifies a sequential set of stages with at least one reviewer in each stage. */
        public array $dispositionReviewStages = [],
        /** Represents the type associated with a retention event. */
        public ?SecurityRetentionEventType $retentionEventType = null
    ) {}
}

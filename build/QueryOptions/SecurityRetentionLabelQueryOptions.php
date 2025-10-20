<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityRetentionLabel resources
 *
 * Available select fields:
 * - actionAfterRetentionPeriod
 * - behaviorDuringRetentionPeriod
 * - createdBy
 * - createdDateTime
 * - defaultRecordBehavior
 * - descriptionForAdmins
 * - descriptionForUsers
 * - displayName
 * - isInUse
 * - labelToBeApplied
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - retentionDuration
 * - retentionTrigger
 * - descriptors
 * - dispositionReviewStages
 * - retentionEventType
 */
class SecurityRetentionLabelQueryOptions extends QueryOptions
{
    public const FIELD_ACTION_AFTER_RETENTION_PERIOD = 'actionAfterRetentionPeriod';
    public const FIELD_BEHAVIOR_DURING_RETENTION_PERIOD = 'behaviorDuringRetentionPeriod';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DEFAULT_RECORD_BEHAVIOR = 'defaultRecordBehavior';
    public const FIELD_DESCRIPTION_FOR_ADMINS = 'descriptionForAdmins';
    public const FIELD_DESCRIPTION_FOR_USERS = 'descriptionForUsers';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_IN_USE = 'isInUse';
    public const FIELD_LABEL_TO_BE_APPLIED = 'labelToBeApplied';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_RETENTION_DURATION = 'retentionDuration';
    public const FIELD_RETENTION_TRIGGER = 'retentionTrigger';
    public const FIELD_DESCRIPTORS = 'descriptors';
    public const FIELD_DISPOSITION_REVIEW_STAGES = 'dispositionReviewStages';
    public const FIELD_RETENTION_EVENT_TYPE = 'retentionEventType';

    /**
     * Select specific SecurityRetentionLabel properties
     * 
     * @param array<string> $select Use SecurityRetentionLabelQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

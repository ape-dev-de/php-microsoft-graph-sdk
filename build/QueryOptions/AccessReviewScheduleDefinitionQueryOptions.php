<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewScheduleDefinition resources
 *
 * Available select fields:
 * - additionalNotificationRecipients
 * - createdBy
 * - createdDateTime
 * - descriptionForAdmins
 * - descriptionForReviewers
 * - displayName
 * - fallbackReviewers
 * - instanceEnumerationScope
 * - lastModifiedDateTime
 * - reviewers
 * - scope
 * - settings
 * - stageSettings
 * - status
 * - instances
 */
class AccessReviewScheduleDefinitionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewScheduleDefinition
     */
    public const FIELD_ADDITIONAL_NOTIFICATION_RECIPIENTS = 'additionalNotificationRecipients';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION_FOR_ADMINS = 'descriptionForAdmins';
    public const FIELD_DESCRIPTION_FOR_REVIEWERS = 'descriptionForReviewers';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_FALLBACK_REVIEWERS = 'fallbackReviewers';
    public const FIELD_INSTANCE_ENUMERATION_SCOPE = 'instanceEnumerationScope';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_REVIEWERS = 'reviewers';
    public const FIELD_SCOPE = 'scope';
    public const FIELD_SETTINGS = 'settings';
    public const FIELD_STAGE_SETTINGS = 'stageSettings';
    public const FIELD_STATUS = 'status';
    public const FIELD_INSTANCES = 'instances';

    /**
     * Select specific AccessReviewScheduleDefinition properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

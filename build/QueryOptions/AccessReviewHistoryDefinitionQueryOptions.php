<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewHistoryDefinition resources
 *
 * Available select fields:
 * - createdBy
 * - createdDateTime
 * - decisions
 * - displayName
 * - reviewHistoryPeriodEndDateTime
 * - reviewHistoryPeriodStartDateTime
 * - scheduleSettings
 * - scopes
 * - status
 * - instances
 */
class AccessReviewHistoryDefinitionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewHistoryDefinition
     */
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DECISIONS = 'decisions';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_REVIEW_HISTORY_PERIOD_END_DATE_TIME = 'reviewHistoryPeriodEndDateTime';
    public const FIELD_REVIEW_HISTORY_PERIOD_START_DATE_TIME = 'reviewHistoryPeriodStartDateTime';
    public const FIELD_SCHEDULE_SETTINGS = 'scheduleSettings';
    public const FIELD_SCOPES = 'scopes';
    public const FIELD_STATUS = 'status';
    public const FIELD_INSTANCES = 'instances';

    /**
     * Select specific AccessReviewHistoryDefinition properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

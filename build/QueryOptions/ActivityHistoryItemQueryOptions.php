<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ActivityHistoryItem resources
 *
 * Available select fields:
 * - activeDurationSeconds
 * - createdDateTime
 * - expirationDateTime
 * - lastActiveDateTime
 * - lastModifiedDateTime
 * - startedDateTime
 * - status
 * - userTimezone
 * - activity
 */
class ActivityHistoryItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ActivityHistoryItem
     */
    public const FIELD_ACTIVE_DURATION_SECONDS = 'activeDurationSeconds';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_EXPIRATION_DATE_TIME = 'expirationDateTime';
    public const FIELD_LAST_ACTIVE_DATE_TIME = 'lastActiveDateTime';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_STARTED_DATE_TIME = 'startedDateTime';
    public const FIELD_STATUS = 'status';
    public const FIELD_USER_TIMEZONE = 'userTimezone';
    public const FIELD_ACTIVITY = 'activity';

    /**
     * Select specific ActivityHistoryItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

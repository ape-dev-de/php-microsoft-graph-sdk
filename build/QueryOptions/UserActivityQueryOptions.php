<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserActivity resources
 *
 * Available select fields:
 * - activationUrl
 * - activitySourceHost
 * - appActivityId
 * - appDisplayName
 * - contentInfo
 * - contentUrl
 * - createdDateTime
 * - expirationDateTime
 * - fallbackUrl
 * - lastModifiedDateTime
 * - status
 * - userTimezone
 * - visualElements
 * - historyItems
 */
class UserActivityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserActivity
     */
    public const FIELD_ACTIVATION_URL = 'activationUrl';
    public const FIELD_ACTIVITY_SOURCE_HOST = 'activitySourceHost';
    public const FIELD_APP_ACTIVITY_ID = 'appActivityId';
    public const FIELD_APP_DISPLAY_NAME = 'appDisplayName';
    public const FIELD_CONTENT_INFO = 'contentInfo';
    public const FIELD_CONTENT_URL = 'contentUrl';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_EXPIRATION_DATE_TIME = 'expirationDateTime';
    public const FIELD_FALLBACK_URL = 'fallbackUrl';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_STATUS = 'status';
    public const FIELD_USER_TIMEZONE = 'userTimezone';
    public const FIELD_VISUAL_ELEMENTS = 'visualElements';
    public const FIELD_HISTORY_ITEMS = 'historyItems';

    /**
     * Select specific UserActivity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

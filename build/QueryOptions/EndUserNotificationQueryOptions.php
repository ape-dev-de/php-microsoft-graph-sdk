<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EndUserNotification resources
 *
 * Available select fields:
 * - createdBy
 * - createdDateTime
 * - description
 * - displayName
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - notificationType
 * - source
 * - status
 * - supportedLocales
 * - details
 */
class EndUserNotificationQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_NOTIFICATION_TYPE = 'notificationType';
    public const FIELD_SOURCE = 'source';
    public const FIELD_STATUS = 'status';
    public const FIELD_SUPPORTED_LOCALES = 'supportedLocales';
    public const FIELD_DETAILS = 'details';

    /**
     * Select specific EndUserNotification properties
     * 
     * @param array<string> $select Use EndUserNotificationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

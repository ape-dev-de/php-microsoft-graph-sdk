<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for NotificationMessageTemplate resources
 *
 * Available select fields:
 * - brandingOptions
 * - defaultLocale
 * - displayName
 * - lastModifiedDateTime
 * - roleScopeTagIds
 * - localizedNotificationMessages
 */
class NotificationMessageTemplateQueryOptions extends QueryOptions
{
    public const FIELD_BRANDING_OPTIONS = 'brandingOptions';
    public const FIELD_DEFAULT_LOCALE = 'defaultLocale';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_ROLE_SCOPE_TAG_IDS = 'roleScopeTagIds';
    public const FIELD_LOCALIZED_NOTIFICATION_MESSAGES = 'localizedNotificationMessages';

    /**
     * Select specific NotificationMessageTemplate properties
     * 
     * @param array<string> $select Use NotificationMessageTemplateQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

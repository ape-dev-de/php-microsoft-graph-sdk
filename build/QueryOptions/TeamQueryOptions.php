<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Team resources
 *
 * Available select fields:
 * - classification
 * - createdDateTime
 * - description
 * - displayName
 * - firstChannelName
 * - funSettings
 * - guestSettings
 * - internalId
 * - isArchived
 * - memberSettings
 * - messagingSettings
 * - specialization
 * - summary
 * - tenantId
 * - visibility
 * - webUrl
 * - allChannels
 * - channels
 * - group
 * - incomingChannels
 * - installedApps
 * - members
 * - operations
 * - permissionGrants
 * - photo
 * - primaryChannel
 * - schedule
 * - tags
 * - template
 */
class TeamQueryOptions extends QueryOptions
{
    public const FIELD_CLASSIFICATION = 'classification';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_FIRST_CHANNEL_NAME = 'firstChannelName';
    public const FIELD_FUN_SETTINGS = 'funSettings';
    public const FIELD_GUEST_SETTINGS = 'guestSettings';
    public const FIELD_INTERNAL_ID = 'internalId';
    public const FIELD_IS_ARCHIVED = 'isArchived';
    public const FIELD_MEMBER_SETTINGS = 'memberSettings';
    public const FIELD_MESSAGING_SETTINGS = 'messagingSettings';
    public const FIELD_SPECIALIZATION = 'specialization';
    public const FIELD_SUMMARY = 'summary';
    public const FIELD_TENANT_ID = 'tenantId';
    public const FIELD_VISIBILITY = 'visibility';
    public const FIELD_WEB_URL = 'webUrl';
    public const FIELD_ALL_CHANNELS = 'allChannels';
    public const FIELD_CHANNELS = 'channels';
    public const FIELD_GROUP = 'group';
    public const FIELD_INCOMING_CHANNELS = 'incomingChannels';
    public const FIELD_INSTALLED_APPS = 'installedApps';
    public const FIELD_MEMBERS = 'members';
    public const FIELD_OPERATIONS = 'operations';
    public const FIELD_PERMISSION_GRANTS = 'permissionGrants';
    public const FIELD_PHOTO = 'photo';
    public const FIELD_PRIMARY_CHANNEL = 'primaryChannel';
    public const FIELD_SCHEDULE = 'schedule';
    public const FIELD_TAGS = 'tags';
    public const FIELD_TEMPLATE = 'template';

    /**
     * Select specific Team properties
     * 
     * @param array<string> $select Use TeamQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

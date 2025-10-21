<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Chat resources
 *
 * Available select fields:
 * - chatType
 * - createdDateTime
 * - isHiddenForAllMembers
 * - lastUpdatedDateTime
 * - onlineMeetingInfo
 * - tenantId
 * - topic
 * - viewpoint
 * - webUrl
 * - installedApps
 * - lastMessagePreview
 * - members
 * - messages
 * - permissionGrants
 * - pinnedMessages
 * - tabs
 */
class ChatQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Chat
     */
    public const FIELD_CHAT_TYPE = 'chatType';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_IS_HIDDEN_FOR_ALL_MEMBERS = 'isHiddenForAllMembers';
    public const FIELD_LAST_UPDATED_DATE_TIME = 'lastUpdatedDateTime';
    public const FIELD_ONLINE_MEETING_INFO = 'onlineMeetingInfo';
    public const FIELD_TENANT_ID = 'tenantId';
    public const FIELD_TOPIC = 'topic';
    public const FIELD_VIEWPOINT = 'viewpoint';
    public const FIELD_WEB_URL = 'webUrl';
    public const FIELD_INSTALLED_APPS = 'installedApps';
    public const FIELD_LAST_MESSAGE_PREVIEW = 'lastMessagePreview';
    public const FIELD_MEMBERS = 'members';
    public const FIELD_MESSAGES = 'messages';
    public const FIELD_PERMISSION_GRANTS = 'permissionGrants';
    public const FIELD_PINNED_MESSAGES = 'pinnedMessages';
    public const FIELD_TABS = 'tabs';

    /**
     * Select specific Chat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

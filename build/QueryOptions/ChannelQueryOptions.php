<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Channel resources
 *
 * Available select fields:
 * - createdDateTime
 * - description
 * - displayName
 * - email
 * - isArchived
 * - isFavoriteByDefault
 * - membershipType
 * - summary
 * - tenantId
 * - webUrl
 * - allMembers
 * - filesFolder
 * - members
 * - messages
 * - sharedWithTeams
 * - tabs
 */
class ChannelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Channel
     */
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EMAIL = 'email';
    public const FIELD_IS_ARCHIVED = 'isArchived';
    public const FIELD_IS_FAVORITE_BY_DEFAULT = 'isFavoriteByDefault';
    public const FIELD_MEMBERSHIP_TYPE = 'membershipType';
    public const FIELD_SUMMARY = 'summary';
    public const FIELD_TENANT_ID = 'tenantId';
    public const FIELD_WEB_URL = 'webUrl';
    public const FIELD_ALL_MEMBERS = 'allMembers';
    public const FIELD_FILES_FOLDER = 'filesFolder';
    public const FIELD_MEMBERS = 'members';
    public const FIELD_MESSAGES = 'messages';
    public const FIELD_SHARED_WITH_TEAMS = 'sharedWithTeams';
    public const FIELD_TABS = 'tabs';

    /**
     * Select specific Channel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

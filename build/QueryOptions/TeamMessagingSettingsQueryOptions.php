<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamMessagingSettings resources
 *
 * Available select fields:
 * - allowChannelMentions
 * - allowOwnerDeleteMessages
 * - allowTeamMentions
 * - allowUserDeleteMessages
 * - allowUserEditMessages
 */
class TeamMessagingSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamMessagingSettings
     */
    public const FIELD_ALLOW_CHANNEL_MENTIONS = 'allowChannelMentions';
    public const FIELD_ALLOW_OWNER_DELETE_MESSAGES = 'allowOwnerDeleteMessages';
    public const FIELD_ALLOW_TEAM_MENTIONS = 'allowTeamMentions';
    public const FIELD_ALLOW_USER_DELETE_MESSAGES = 'allowUserDeleteMessages';
    public const FIELD_ALLOW_USER_EDIT_MESSAGES = 'allowUserEditMessages';

    /**
     * Select specific TeamMessagingSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

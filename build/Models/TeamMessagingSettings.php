<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamMessagingSettings
 */
class TeamMessagingSettings
{
    public function __construct(
        /** If set to true, @channel mentions are allowed. */
        public ?bool $allowChannelMentions = null,
        /** If set to true, owners can delete any message. */
        public ?bool $allowOwnerDeleteMessages = null,
        /** If set to true, @team mentions are allowed. */
        public ?bool $allowTeamMentions = null,
        /** If set to true, users can delete their messages. */
        public ?bool $allowUserDeleteMessages = null,
        /** If set to true, users can edit their messages. */
        public ?string $allowUserEditMessages = null
    ) {}
}

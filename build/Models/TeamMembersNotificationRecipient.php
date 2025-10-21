<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamMembersNotificationRecipient
 */
class TeamMembersNotificationRecipient
{
    public function __construct(
        /** The unique identifier for the team whose members should receive the notification. */
        public ?string $teamId = null
    ) {}
}

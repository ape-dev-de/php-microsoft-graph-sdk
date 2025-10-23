<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamMembersNotificationRecipient
 */
class TeamMembersNotificationRecipient
{
    /** The unique identifier for the team whose members should receive the notification. */
    public ?string $teamId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['teamId'])) {
            $this->teamId = $data['teamId'];
        }
    }
}

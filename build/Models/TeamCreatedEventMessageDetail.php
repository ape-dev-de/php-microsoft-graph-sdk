<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamCreatedEventMessageDetail
 */
class TeamCreatedEventMessageDetail
{
    public function __construct(
        /** Initiator of the event. */
        public ?string $initiator = null,
        /** Description for the team. */
        public ?string $teamDescription = null,
        /** Display name of the team. */
        public ?string $teamDisplayName = null,
        /** Unique identifier of the team. */
        public ?string $teamId = null
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamRenamedEventMessageDetail
 */
class TeamRenamedEventMessageDetail
{
    public function __construct(
        /** Initiator of the event. */
        public ?IdentitySet $initiator = null,
        /** The updated name of the team. */
        public ?string $teamDisplayName = null,
        /** Unique identifier of the team. */
        public ?string $teamId = null
    ) {}
}

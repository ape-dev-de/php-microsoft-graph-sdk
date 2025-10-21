<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamJoiningEnabledEventMessageDetail
 */
class TeamJoiningEnabledEventMessageDetail
{
    public function __construct(
        /** Initiator of the event. */
        public ?IdentitySet $initiator = null,
        /** Unique identifier of the team. */
        public ?string $teamId = null
    ) {}
}

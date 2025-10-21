<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamJoiningDisabledEventMessageDetail
 */
class TeamJoiningDisabledEventMessageDetail
{
    public function __construct(
        /** Initiator of the event. */
        public ?string $initiator = null,
        /** Unique identifier of the team. */
        public ?string $teamId = null
    ) {}
}

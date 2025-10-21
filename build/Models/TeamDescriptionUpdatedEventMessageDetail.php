<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamDescriptionUpdatedEventMessageDetail
 */
class TeamDescriptionUpdatedEventMessageDetail
{
    public function __construct(
        /** Initiator of the event. */
        public ?IdentitySet $initiator = null,
        /** The updated description for the team. */
        public ?string $teamDescription = null,
        /** Unique identifier of the team. */
        public ?string $teamId = null
    ) {}
}

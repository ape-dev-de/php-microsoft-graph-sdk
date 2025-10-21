<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAppRemovedEventMessageDetail
 */
class TeamsAppRemovedEventMessageDetail
{
    public function __construct(
        /** Initiator of the event. */
        public ?IdentitySet $initiator = null,
        /** Display name of the teamsApp. */
        public ?string $teamsAppDisplayName = null,
        /** Unique identifier of the teamsApp. */
        public ?string $teamsAppId = null
    ) {}
}

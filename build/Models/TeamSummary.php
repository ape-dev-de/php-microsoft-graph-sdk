<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamSummary
 */
class TeamSummary
{
    public function __construct(
        /** Count of guests in a team. */
        public ?float $guestsCount = null,
        /** Count of members in a team. */
        public ?float $membersCount = null,
        /** Count of owners in a team. */
        public ?string $ownersCount = null
    ) {}
}

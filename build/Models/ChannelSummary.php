<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChannelSummary
 */
class ChannelSummary
{
    public function __construct(
        /** Count of guests in a channel. */
        public ?float $guestsCount = null,
        /** Indicates whether external members are included on the channel. */
        public ?bool $hasMembersFromOtherTenants = null,
        /** Count of members in a channel. */
        public ?float $membersCount = null,
        /** Count of owners in a channel. */
        public ?float $ownersCount = null
    ) {}
}

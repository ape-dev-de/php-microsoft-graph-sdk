<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharedWithChannelTeamInfo
 */
class SharedWithChannelTeamInfo
{
    public function __construct(
        /** Indicates whether the team is the host of the channel. */
        public ?bool $isHostTeam = null,
        /** @var string[] A collection of team members who have access to the shared channel. */
        public array $allowedMembers = []
    ) {}
}

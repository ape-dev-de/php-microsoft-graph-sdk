<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharedWithChannelTeamInfo
 */
class SharedWithChannelTeamInfo
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The name of the team. */
        public ?string $displayName = null,
        /** The ID of the Microsoft Entra tenant. */
        public ?string $tenantId = null,
        /**  */
        public ?Team $team = null,
        /** Indicates whether the team is the host of the channel. */
        public ?bool $isHostTeam = null,
        /** A collection of team members who have access to the shared channel. */
        public array $allowedMembers = []
    ) {}
}

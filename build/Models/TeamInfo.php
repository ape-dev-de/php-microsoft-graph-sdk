<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamInfo
 */
class TeamInfo
{
    public function __construct(
        /** The name of the team. */
        public ?string $displayName = null,
        /** The ID of the Microsoft Entra tenant. */
        public ?string $tenantId = null,
        /**  */
        public ?string $team = null
    ) {}
}

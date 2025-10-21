<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GroupMembers
 */
class GroupMembers
{
    public function __construct(
        /** The name of the group in Microsoft Entra ID. Read-only. */
        public ?string $description = null,
        /** The ID of the group in Microsoft Entra ID. */
        public ?string $groupId = null
    ) {}
}

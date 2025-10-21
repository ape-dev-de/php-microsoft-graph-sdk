<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamworkTagMember
 */
class TeamworkTagMember
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The member's display name. */
        public ?string $displayName = null,
        /** The ID of the tenant that the tag member is a part of. */
        public ?string $tenantId = null,
        /** The user ID of the member. */
        public ?string $userId = null
    ) {}
}

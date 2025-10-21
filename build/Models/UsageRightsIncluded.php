<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UsageRightsIncluded
 */
class UsageRightsIncluded
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The email of owner label rights. */
        public ?string $ownerEmail = null,
        /** The email of user with label user rights. */
        public ?string $userEmail = null,
        /**  */
        public ?UsageRights $value = null
    ) {}
}

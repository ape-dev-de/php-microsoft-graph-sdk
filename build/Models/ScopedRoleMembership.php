<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ScopedRoleMembership
 */
class ScopedRoleMembership
{
    public function __construct(
        /** Unique identifier for the administrative unit that the directory role is scoped to */
        public ?string $administrativeUnitId = null,
        /** Unique identifier for the directory role that the member is in. */
        public ?string $roleId = null,
        /**  */
        public ?string $roleMemberInfo = null
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RolePermission
 */
class RolePermission
{
    public function __construct(
        /** Resource Actions each containing a set of allowed and not allowed permissions. */
        public array $resourceActions = []
    ) {}
}

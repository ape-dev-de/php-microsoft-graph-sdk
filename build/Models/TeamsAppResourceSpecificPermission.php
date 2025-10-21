<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAppResourceSpecificPermission
 */
class TeamsAppResourceSpecificPermission
{
    public function __construct(
        /** The type of resource-specific permission. */
        public ?string $permissionType = null,
        /** The name of the resource-specific permission. */
        public ?string $permissionValue = null
    ) {}
}

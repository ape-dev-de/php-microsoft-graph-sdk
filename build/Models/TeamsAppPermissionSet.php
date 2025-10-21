<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAppPermissionSet
 */
class TeamsAppPermissionSet
{
    public function __construct(
        /** A collection of resource-specific permissions. */
        public array $resourceSpecificPermissions = []
    ) {}
}

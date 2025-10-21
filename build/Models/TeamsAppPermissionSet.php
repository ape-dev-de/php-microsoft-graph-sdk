<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAppPermissionSet
 */
class TeamsAppPermissionSet
{
    public function __construct(
        /** @var string[] A collection of resource-specific permissions. */
        public array $resourceSpecificPermissions = []
    ) {}
}

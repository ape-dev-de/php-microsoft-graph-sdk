<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RolePermission
 */
class RolePermission
{
    public function __construct(
        /** @var string[] Contains the set of ResourceActions determining the allowed and not allowed permissions for each role. */
        public array $resourceActions = []
    ) {}
}

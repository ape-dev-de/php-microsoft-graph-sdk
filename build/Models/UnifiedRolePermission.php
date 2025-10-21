<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRolePermission
 */
class UnifiedRolePermission
{
    public function __construct(
        /** @var string[] Set of tasks that can be performed on a resource. Required. */
        public array $allowedResourceActions = [],
        /** Optional constraints that must be met for the permission to be effective. Not supported for custom roles. */
        public ?string $condition = null,
        /** @var string[] Set of tasks that may not be performed on a resource. Not yet supported. */
        public array $excludedResourceActions = []
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RoleDefinition
 */
class RoleDefinition
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Description of the Role definition. */
        public ?string $description = null,
        /** Display Name of the Role definition. */
        public ?string $displayName = null,
        /** Type of Role. Set to True if it is built-in, or set to False if it is a custom role definition. */
        public ?bool $isBuiltIn = null,
        /** List of Role Permissions this role is allowed to perform. These must match the actionName that is defined as part of the rolePermission. */
        public array $rolePermissions = [],
        /** List of Role assignments for this role definition. */
        public array $roleAssignments = []
    ) {}
}

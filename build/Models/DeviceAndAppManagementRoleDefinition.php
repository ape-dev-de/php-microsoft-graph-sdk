<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceAndAppManagementRoleDefinition
 */
class DeviceAndAppManagementRoleDefinition
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
        /** @var string[] The Role Definition resource. The role definition is the foundation of role based access in Intune. The role combines an Intune resource such as a Mobile App and associated role permissions such as Create or Read for the resource. There are two types of roles, built-in and custom. Built-in roles cannot be modified. Both built-in roles and custom roles must have assignments to be enforced. Create custom roles if you want to define a role that allows any of the available resources and role permissions to be combined into a single role. */
        public array $roleAssignments = []
    ) {}
}

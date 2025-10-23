<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceAndAppManagementRoleDefinition
 */
class DeviceAndAppManagementRoleDefinition
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Description of the Role definition. */
    public ?string $description = null;

    /** Display Name of the Role definition. */
    public ?string $displayName = null;

    /** Type of Role. Set to True if it is built-in, or set to False if it is a custom role definition. */
    public ?bool $isBuiltIn = null;

    /** 
     * List of Role Permissions this role is allowed to perform. These must match the actionName that is defined as part of the rolePermission.
     * @var RolePermission[]
     */
    public array $rolePermissions = [];

    /** 
     * List of Role assignments for this role definition.
     * @var RoleAssignment[]
     */
    public array $roleAssignments = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isBuiltIn'])) {
            $this->isBuiltIn = $data['isBuiltIn'];
        }
        if (isset($data['rolePermissions'])) {
            $this->rolePermissions = $data['rolePermissions'];
        }
        if (isset($data['roleAssignments'])) {
            $this->roleAssignments = $data['roleAssignments'];
        }
    }
}

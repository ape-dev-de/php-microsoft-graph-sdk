<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DefaultUserRolePermissions resources
 *
 * Available select fields:
 * - allowedToCreateApps
 * - allowedToCreateSecurityGroups
 * - allowedToCreateTenants
 * - allowedToReadBitlockerKeysForOwnedDevice
 * - allowedToReadOtherUsers
 * - permissionGrantPoliciesAssigned
 */
class DefaultUserRolePermissionsQueryOptions extends QueryOptions
{
    public const FIELD_ALLOWED_TO_CREATE_APPS = 'allowedToCreateApps';
    public const FIELD_ALLOWED_TO_CREATE_SECURITY_GROUPS = 'allowedToCreateSecurityGroups';
    public const FIELD_ALLOWED_TO_CREATE_TENANTS = 'allowedToCreateTenants';
    public const FIELD_ALLOWED_TO_READ_BITLOCKER_KEYS_FOR_OWNED_DEVICE = 'allowedToReadBitlockerKeysForOwnedDevice';
    public const FIELD_ALLOWED_TO_READ_OTHER_USERS = 'allowedToReadOtherUsers';
    public const FIELD_PERMISSION_GRANT_POLICIES_ASSIGNED = 'permissionGrantPoliciesAssigned';

    /**
     * Select specific DefaultUserRolePermissions properties
     * 
     * @param array<string> $select Use DefaultUserRolePermissionsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

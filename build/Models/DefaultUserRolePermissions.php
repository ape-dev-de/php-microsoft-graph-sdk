<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DefaultUserRolePermissions
 */
class DefaultUserRolePermissions
{
    public function __construct(
        /** Indicates whether the default user role can create applications. This setting corresponds to the Users can register applications setting in the User settings menu in the Microsoft Entra admin center. */
        public ?bool $allowedToCreateApps = null,
        /** Indicates whether the default user role can create security groups. This setting corresponds to the following menus in the Microsoft Entra admin center:  The Users can create security groups in Microsoft Entra admin centers, API or PowerShell setting in the Group settings menu.  Users can create security groups setting in the User settings menu. */
        public ?bool $allowedToCreateSecurityGroups = null,
        /** Indicates whether the default user role can create tenants. This setting corresponds to the Restrict non-admin users from creating tenants setting in the User settings menu in the Microsoft Entra admin center.  When this setting is false, users assigned the Tenant Creator role can still create tenants. */
        public ?bool $allowedToCreateTenants = null,
        /** Indicates whether the registered owners of a device can read their own BitLocker recovery keys with default user role. */
        public ?bool $allowedToReadBitlockerKeysForOwnedDevice = null,
        /** Indicates whether the default user role can read other users. DO NOT SET THIS VALUE TO false. */
        public ?bool $allowedToReadOtherUsers = null,
        /** @var string[] Indicates if user consent to apps is allowed, and if it is, which permission to grant consent and which app consent policy (permissionGrantPolicy) govern the permission for users to grant consent. Value should be in the format managePermissionGrantsForSelf.{id}, where {id} is the id of a built-in or custom app consent policy. An empty list indicates user consent to apps is disabled. */
        public array $permissionGrantPoliciesAssigned = []
    ) {}
}

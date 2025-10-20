<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DefaultUserRolePermissions
 */
class DefaultUserRolePermissions
{
    /**
     * Indicates whether the default user role can create applications. This setting corresponds to the Users can register applications setting in the User settings menu in the Microsoft Entra admin center.
     */
    private ?bool $allowedToCreateApps;

    /**
     * Indicates whether the default user role can create security groups. This setting corresponds to the following menus in the Microsoft Entra admin center:  The Users can create security groups in Microsoft Entra admin centers, API or PowerShell setting in the Group settings menu.  Users can create security groups setting in the User settings menu.
     */
    private ?bool $allowedToCreateSecurityGroups;

    /**
     * Indicates whether the default user role can create tenants. This setting corresponds to the Restrict non-admin users from creating tenants setting in the User settings menu in the Microsoft Entra admin center.  When this setting is false, users assigned the Tenant Creator role can still create tenants.
     */
    private ?bool $allowedToCreateTenants;

    /**
     * Indicates whether the registered owners of a device can read their own BitLocker recovery keys with default user role.
     */
    private ?bool $allowedToReadBitlockerKeysForOwnedDevice;

    /**
     * Indicates whether the default user role can read other users. DO NOT SET THIS VALUE TO false.
     */
    private ?bool $allowedToReadOtherUsers;

    /**
     * Indicates if user consent to apps is allowed, and if it is, which permission to grant consent and which app consent policy (permissionGrantPolicy) govern the permission for users to grant consent. Value should be in the format managePermissionGrantsForSelf.{id}, where {id} is the id of a built-in or custom app consent policy. An empty list indicates user consent to apps is disabled.
     */
    private ?string $permissionGrantPoliciesAssigned;

    public function getAllowedToCreateApps(): ?bool
    {
        return $this->allowedToCreateApps;
    }

    public function setAllowedToCreateApps(?bool $allowedToCreateApps): self
    {
        $this->allowedToCreateApps = $allowedToCreateApps;
        return $this;
    }

    public function getAllowedToCreateSecurityGroups(): ?bool
    {
        return $this->allowedToCreateSecurityGroups;
    }

    public function setAllowedToCreateSecurityGroups(?bool $allowedToCreateSecurityGroups): self
    {
        $this->allowedToCreateSecurityGroups = $allowedToCreateSecurityGroups;
        return $this;
    }

    public function getAllowedToCreateTenants(): ?bool
    {
        return $this->allowedToCreateTenants;
    }

    public function setAllowedToCreateTenants(?bool $allowedToCreateTenants): self
    {
        $this->allowedToCreateTenants = $allowedToCreateTenants;
        return $this;
    }

    public function getAllowedToReadBitlockerKeysForOwnedDevice(): ?bool
    {
        return $this->allowedToReadBitlockerKeysForOwnedDevice;
    }

    public function setAllowedToReadBitlockerKeysForOwnedDevice(?bool $allowedToReadBitlockerKeysForOwnedDevice): self
    {
        $this->allowedToReadBitlockerKeysForOwnedDevice = $allowedToReadBitlockerKeysForOwnedDevice;
        return $this;
    }

    public function getAllowedToReadOtherUsers(): ?bool
    {
        return $this->allowedToReadOtherUsers;
    }

    public function setAllowedToReadOtherUsers(?bool $allowedToReadOtherUsers): self
    {
        $this->allowedToReadOtherUsers = $allowedToReadOtherUsers;
        return $this;
    }

    public function getPermissionGrantPoliciesAssigned(): ?string
    {
        return $this->permissionGrantPoliciesAssigned;
    }

    public function setPermissionGrantPoliciesAssigned(?string $permissionGrantPoliciesAssigned): self
    {
        $this->permissionGrantPoliciesAssigned = $permissionGrantPoliciesAssigned;
        return $this;
    }

}

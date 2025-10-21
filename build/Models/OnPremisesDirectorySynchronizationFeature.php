<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnPremisesDirectorySynchronizationFeature
 */
class OnPremisesDirectorySynchronizationFeature
{
    /**
     * Used to block cloud object takeover via source anchor hard match if enabled.
     */
    private ?bool $blockCloudObjectTakeoverThroughHardMatchEnabled;

    /**
     * Use to block soft match for all objects if enabled for the  tenant. Customers are encouraged to enable this feature and keep it enabled until soft matching is required again for their tenancy. This flag should be enabled again after any soft matching has been completed and is no longer needed.
     */
    private ?bool $blockSoftMatchEnabled;

    /**
     * When true, persists the values of Mobile and OtherMobile in on-premises AD during sync cycles instead of values of MobilePhone or AlternateMobilePhones in Microsoft Entra ID.
     */
    private ?bool $bypassDirSyncOverridesEnabled;

    /**
     * Used to indicate that cloud password policy applies to users whose passwords are synchronized from on-premises.
     */
    private ?bool $cloudPasswordPolicyForPasswordSyncedUsersEnabled;

    /**
     * Used to enable concurrent user credentials update in OrgId.
     */
    private ?bool $concurrentCredentialUpdateEnabled;

    /**
     * Used to enable concurrent user creation in OrgId.
     */
    private ?bool $concurrentOrgIdProvisioningEnabled;

    /**
     * Used to indicate that device write-back is enabled.
     */
    private ?bool $deviceWritebackEnabled;

    /**
     * Used to indicate that directory extensions are being synced from on-premises AD to Microsoft Entra ID.
     */
    private ?bool $directoryExtensionsEnabled;

    /**
     * Used to indicate that for a Microsoft Forefront Online Protection for Exchange (FOPE) migrated tenant, the conflicting proxy address should be migrated over.
     */
    private ?bool $fopeConflictResolutionEnabled;

    /**
     * Used to enable object-level group writeback feature for additional group types.
     */
    private ?bool $groupWriteBackEnabled;

    /**
     * Used to indicate on-premise password synchronization is enabled.
     */
    private ?bool $passwordSyncEnabled;

    /**
     * Used to indicate that writeback of password resets from Microsoft Entra ID to on-premises AD is enabled. This property isn't in use and updating it isn't supported.
     */
    private ?bool $passwordWritebackEnabled;

    /**
     * Used to indicate that we should quarantine objects with conflicting proxy address.
     */
    private ?bool $quarantineUponProxyAddressesConflictEnabled;

    /**
     * Used to indicate that we should quarantine objects conflicting with duplicate userPrincipalName.
     */
    private ?bool $quarantineUponUpnConflictEnabled;

    /**
     * Used to indicate that we should soft match objects based on userPrincipalName.
     */
    private ?bool $softMatchOnUpnEnabled;

    /**
     * Used to indicate that we should synchronize userPrincipalName objects for managed users with licenses.
     */
    private ?bool $synchronizeUpnForManagedUsersEnabled;

    /**
     * Used to indicate that Microsoft 365 Group write-back is enabled.
     */
    private ?bool $unifiedGroupWritebackEnabled;

    /**
     * Used to indicate that feature to force password change for a user on logon is enabled while synchronizing on-premise credentials.
     */
    private ?bool $userForcePasswordChangeOnLogonEnabled;

    /**
     * Used to indicate that user writeback is enabled.
     */
    private ?string $userWritebackEnabled;


    public function getBlockCloudObjectTakeoverThroughHardMatchEnabled(): ?bool
    {
        return $this->blockCloudObjectTakeoverThroughHardMatchEnabled;
    }

    public function setBlockCloudObjectTakeoverThroughHardMatchEnabled(?bool $blockCloudObjectTakeoverThroughHardMatchEnabled): self
    {
        $this->blockCloudObjectTakeoverThroughHardMatchEnabled = $blockCloudObjectTakeoverThroughHardMatchEnabled;
        return $this;
    }

    public function getBlockSoftMatchEnabled(): ?bool
    {
        return $this->blockSoftMatchEnabled;
    }

    public function setBlockSoftMatchEnabled(?bool $blockSoftMatchEnabled): self
    {
        $this->blockSoftMatchEnabled = $blockSoftMatchEnabled;
        return $this;
    }

    public function getBypassDirSyncOverridesEnabled(): ?bool
    {
        return $this->bypassDirSyncOverridesEnabled;
    }

    public function setBypassDirSyncOverridesEnabled(?bool $bypassDirSyncOverridesEnabled): self
    {
        $this->bypassDirSyncOverridesEnabled = $bypassDirSyncOverridesEnabled;
        return $this;
    }

    public function getCloudPasswordPolicyForPasswordSyncedUsersEnabled(): ?bool
    {
        return $this->cloudPasswordPolicyForPasswordSyncedUsersEnabled;
    }

    public function setCloudPasswordPolicyForPasswordSyncedUsersEnabled(?bool $cloudPasswordPolicyForPasswordSyncedUsersEnabled): self
    {
        $this->cloudPasswordPolicyForPasswordSyncedUsersEnabled = $cloudPasswordPolicyForPasswordSyncedUsersEnabled;
        return $this;
    }

    public function getConcurrentCredentialUpdateEnabled(): ?bool
    {
        return $this->concurrentCredentialUpdateEnabled;
    }

    public function setConcurrentCredentialUpdateEnabled(?bool $concurrentCredentialUpdateEnabled): self
    {
        $this->concurrentCredentialUpdateEnabled = $concurrentCredentialUpdateEnabled;
        return $this;
    }

    public function getConcurrentOrgIdProvisioningEnabled(): ?bool
    {
        return $this->concurrentOrgIdProvisioningEnabled;
    }

    public function setConcurrentOrgIdProvisioningEnabled(?bool $concurrentOrgIdProvisioningEnabled): self
    {
        $this->concurrentOrgIdProvisioningEnabled = $concurrentOrgIdProvisioningEnabled;
        return $this;
    }

    public function getDeviceWritebackEnabled(): ?bool
    {
        return $this->deviceWritebackEnabled;
    }

    public function setDeviceWritebackEnabled(?bool $deviceWritebackEnabled): self
    {
        $this->deviceWritebackEnabled = $deviceWritebackEnabled;
        return $this;
    }

    public function getDirectoryExtensionsEnabled(): ?bool
    {
        return $this->directoryExtensionsEnabled;
    }

    public function setDirectoryExtensionsEnabled(?bool $directoryExtensionsEnabled): self
    {
        $this->directoryExtensionsEnabled = $directoryExtensionsEnabled;
        return $this;
    }

    public function getFopeConflictResolutionEnabled(): ?bool
    {
        return $this->fopeConflictResolutionEnabled;
    }

    public function setFopeConflictResolutionEnabled(?bool $fopeConflictResolutionEnabled): self
    {
        $this->fopeConflictResolutionEnabled = $fopeConflictResolutionEnabled;
        return $this;
    }

    public function getGroupWriteBackEnabled(): ?bool
    {
        return $this->groupWriteBackEnabled;
    }

    public function setGroupWriteBackEnabled(?bool $groupWriteBackEnabled): self
    {
        $this->groupWriteBackEnabled = $groupWriteBackEnabled;
        return $this;
    }

    public function getPasswordSyncEnabled(): ?bool
    {
        return $this->passwordSyncEnabled;
    }

    public function setPasswordSyncEnabled(?bool $passwordSyncEnabled): self
    {
        $this->passwordSyncEnabled = $passwordSyncEnabled;
        return $this;
    }

    public function getPasswordWritebackEnabled(): ?bool
    {
        return $this->passwordWritebackEnabled;
    }

    public function setPasswordWritebackEnabled(?bool $passwordWritebackEnabled): self
    {
        $this->passwordWritebackEnabled = $passwordWritebackEnabled;
        return $this;
    }

    public function getQuarantineUponProxyAddressesConflictEnabled(): ?bool
    {
        return $this->quarantineUponProxyAddressesConflictEnabled;
    }

    public function setQuarantineUponProxyAddressesConflictEnabled(?bool $quarantineUponProxyAddressesConflictEnabled): self
    {
        $this->quarantineUponProxyAddressesConflictEnabled = $quarantineUponProxyAddressesConflictEnabled;
        return $this;
    }

    public function getQuarantineUponUpnConflictEnabled(): ?bool
    {
        return $this->quarantineUponUpnConflictEnabled;
    }

    public function setQuarantineUponUpnConflictEnabled(?bool $quarantineUponUpnConflictEnabled): self
    {
        $this->quarantineUponUpnConflictEnabled = $quarantineUponUpnConflictEnabled;
        return $this;
    }

    public function getSoftMatchOnUpnEnabled(): ?bool
    {
        return $this->softMatchOnUpnEnabled;
    }

    public function setSoftMatchOnUpnEnabled(?bool $softMatchOnUpnEnabled): self
    {
        $this->softMatchOnUpnEnabled = $softMatchOnUpnEnabled;
        return $this;
    }

    public function getSynchronizeUpnForManagedUsersEnabled(): ?bool
    {
        return $this->synchronizeUpnForManagedUsersEnabled;
    }

    public function setSynchronizeUpnForManagedUsersEnabled(?bool $synchronizeUpnForManagedUsersEnabled): self
    {
        $this->synchronizeUpnForManagedUsersEnabled = $synchronizeUpnForManagedUsersEnabled;
        return $this;
    }

    public function getUnifiedGroupWritebackEnabled(): ?bool
    {
        return $this->unifiedGroupWritebackEnabled;
    }

    public function setUnifiedGroupWritebackEnabled(?bool $unifiedGroupWritebackEnabled): self
    {
        $this->unifiedGroupWritebackEnabled = $unifiedGroupWritebackEnabled;
        return $this;
    }

    public function getUserForcePasswordChangeOnLogonEnabled(): ?bool
    {
        return $this->userForcePasswordChangeOnLogonEnabled;
    }

    public function setUserForcePasswordChangeOnLogonEnabled(?bool $userForcePasswordChangeOnLogonEnabled): self
    {
        $this->userForcePasswordChangeOnLogonEnabled = $userForcePasswordChangeOnLogonEnabled;
        return $this;
    }

    public function getUserWritebackEnabled(): ?string
    {
        return $this->userWritebackEnabled;
    }

    public function setUserWritebackEnabled(?string $userWritebackEnabled): self
    {
        $this->userWritebackEnabled = $userWritebackEnabled;
        return $this;
    }

}

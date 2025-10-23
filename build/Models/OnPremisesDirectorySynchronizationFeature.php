<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnPremisesDirectorySynchronizationFeature
 */
class OnPremisesDirectorySynchronizationFeature
{
    /** Used to block cloud object takeover via source anchor hard match if enabled. */
    public ?bool $blockCloudObjectTakeoverThroughHardMatchEnabled = null;

    /** Use to block soft match for all objects if enabled for the  tenant. Customers are encouraged to enable this feature and keep it enabled until soft matching is required again for their tenancy. This flag should be enabled again after any soft matching has been completed and is no longer needed. */
    public ?bool $blockSoftMatchEnabled = null;

    /** When true, persists the values of Mobile and OtherMobile in on-premises AD during sync cycles instead of values of MobilePhone or AlternateMobilePhones in Microsoft Entra ID. */
    public ?bool $bypassDirSyncOverridesEnabled = null;

    /** Used to indicate that cloud password policy applies to users whose passwords are synchronized from on-premises. */
    public ?bool $cloudPasswordPolicyForPasswordSyncedUsersEnabled = null;

    /** Used to enable concurrent user credentials update in OrgId. */
    public ?bool $concurrentCredentialUpdateEnabled = null;

    /** Used to enable concurrent user creation in OrgId. */
    public ?bool $concurrentOrgIdProvisioningEnabled = null;

    /** Used to indicate that device write-back is enabled. */
    public ?bool $deviceWritebackEnabled = null;

    /** Used to indicate that directory extensions are being synced from on-premises AD to Microsoft Entra ID. */
    public ?bool $directoryExtensionsEnabled = null;

    /** Used to indicate that for a Microsoft Forefront Online Protection for Exchange (FOPE) migrated tenant, the conflicting proxy address should be migrated over. */
    public ?bool $fopeConflictResolutionEnabled = null;

    /** Used to enable object-level group writeback feature for additional group types. */
    public ?bool $groupWriteBackEnabled = null;

    /** Used to indicate on-premise password synchronization is enabled. */
    public ?bool $passwordSyncEnabled = null;

    /** Used to indicate that writeback of password resets from Microsoft Entra ID to on-premises AD is enabled. This property isn't in use and updating it isn't supported. */
    public ?bool $passwordWritebackEnabled = null;

    /** Used to indicate that we should quarantine objects with conflicting proxy address. */
    public ?bool $quarantineUponProxyAddressesConflictEnabled = null;

    /** Used to indicate that we should quarantine objects conflicting with duplicate userPrincipalName. */
    public ?bool $quarantineUponUpnConflictEnabled = null;

    /** Used to indicate that we should soft match objects based on userPrincipalName. */
    public ?bool $softMatchOnUpnEnabled = null;

    /** Used to indicate that we should synchronize userPrincipalName objects for managed users with licenses. */
    public ?bool $synchronizeUpnForManagedUsersEnabled = null;

    /** Used to indicate that Microsoft 365 Group write-back is enabled. */
    public ?bool $unifiedGroupWritebackEnabled = null;

    /** Used to indicate that feature to force password change for a user on logon is enabled while synchronizing on-premise credentials. */
    public ?bool $userForcePasswordChangeOnLogonEnabled = null;

    /** Used to indicate that user writeback is enabled. */
    public ?bool $userWritebackEnabled = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['blockCloudObjectTakeoverThroughHardMatchEnabled'])) {
            $this->blockCloudObjectTakeoverThroughHardMatchEnabled = $data['blockCloudObjectTakeoverThroughHardMatchEnabled'];
        }
        if (isset($data['blockSoftMatchEnabled'])) {
            $this->blockSoftMatchEnabled = $data['blockSoftMatchEnabled'];
        }
        if (isset($data['bypassDirSyncOverridesEnabled'])) {
            $this->bypassDirSyncOverridesEnabled = $data['bypassDirSyncOverridesEnabled'];
        }
        if (isset($data['cloudPasswordPolicyForPasswordSyncedUsersEnabled'])) {
            $this->cloudPasswordPolicyForPasswordSyncedUsersEnabled = $data['cloudPasswordPolicyForPasswordSyncedUsersEnabled'];
        }
        if (isset($data['concurrentCredentialUpdateEnabled'])) {
            $this->concurrentCredentialUpdateEnabled = $data['concurrentCredentialUpdateEnabled'];
        }
        if (isset($data['concurrentOrgIdProvisioningEnabled'])) {
            $this->concurrentOrgIdProvisioningEnabled = $data['concurrentOrgIdProvisioningEnabled'];
        }
        if (isset($data['deviceWritebackEnabled'])) {
            $this->deviceWritebackEnabled = $data['deviceWritebackEnabled'];
        }
        if (isset($data['directoryExtensionsEnabled'])) {
            $this->directoryExtensionsEnabled = $data['directoryExtensionsEnabled'];
        }
        if (isset($data['fopeConflictResolutionEnabled'])) {
            $this->fopeConflictResolutionEnabled = $data['fopeConflictResolutionEnabled'];
        }
        if (isset($data['groupWriteBackEnabled'])) {
            $this->groupWriteBackEnabled = $data['groupWriteBackEnabled'];
        }
        if (isset($data['passwordSyncEnabled'])) {
            $this->passwordSyncEnabled = $data['passwordSyncEnabled'];
        }
        if (isset($data['passwordWritebackEnabled'])) {
            $this->passwordWritebackEnabled = $data['passwordWritebackEnabled'];
        }
        if (isset($data['quarantineUponProxyAddressesConflictEnabled'])) {
            $this->quarantineUponProxyAddressesConflictEnabled = $data['quarantineUponProxyAddressesConflictEnabled'];
        }
        if (isset($data['quarantineUponUpnConflictEnabled'])) {
            $this->quarantineUponUpnConflictEnabled = $data['quarantineUponUpnConflictEnabled'];
        }
        if (isset($data['softMatchOnUpnEnabled'])) {
            $this->softMatchOnUpnEnabled = $data['softMatchOnUpnEnabled'];
        }
        if (isset($data['synchronizeUpnForManagedUsersEnabled'])) {
            $this->synchronizeUpnForManagedUsersEnabled = $data['synchronizeUpnForManagedUsersEnabled'];
        }
        if (isset($data['unifiedGroupWritebackEnabled'])) {
            $this->unifiedGroupWritebackEnabled = $data['unifiedGroupWritebackEnabled'];
        }
        if (isset($data['userForcePasswordChangeOnLogonEnabled'])) {
            $this->userForcePasswordChangeOnLogonEnabled = $data['userForcePasswordChangeOnLogonEnabled'];
        }
        if (isset($data['userWritebackEnabled'])) {
            $this->userWritebackEnabled = $data['userWritebackEnabled'];
        }
    }
}

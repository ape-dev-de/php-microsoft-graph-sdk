<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnPremisesDirectorySynchronizationFeature
 */
class OnPremisesDirectorySynchronizationFeature
{
    public function __construct(
        /** Used to block cloud object takeover via source anchor hard match if enabled. */
        public ?bool $blockCloudObjectTakeoverThroughHardMatchEnabled = null,
        /** Use to block soft match for all objects if enabled for the  tenant. Customers are encouraged to enable this feature and keep it enabled until soft matching is required again for their tenancy. This flag should be enabled again after any soft matching has been completed and is no longer needed. */
        public ?bool $blockSoftMatchEnabled = null,
        /** When true, persists the values of Mobile and OtherMobile in on-premises AD during sync cycles instead of values of MobilePhone or AlternateMobilePhones in Microsoft Entra ID. */
        public ?bool $bypassDirSyncOverridesEnabled = null,
        /** Used to indicate that cloud password policy applies to users whose passwords are synchronized from on-premises. */
        public ?bool $cloudPasswordPolicyForPasswordSyncedUsersEnabled = null,
        /** Used to enable concurrent user credentials update in OrgId. */
        public ?bool $concurrentCredentialUpdateEnabled = null,
        /** Used to enable concurrent user creation in OrgId. */
        public ?bool $concurrentOrgIdProvisioningEnabled = null,
        /** Used to indicate that device write-back is enabled. */
        public ?bool $deviceWritebackEnabled = null,
        /** Used to indicate that directory extensions are being synced from on-premises AD to Microsoft Entra ID. */
        public ?bool $directoryExtensionsEnabled = null,
        /** Used to indicate that for a Microsoft Forefront Online Protection for Exchange (FOPE) migrated tenant, the conflicting proxy address should be migrated over. */
        public ?bool $fopeConflictResolutionEnabled = null,
        /** Used to enable object-level group writeback feature for additional group types. */
        public ?bool $groupWriteBackEnabled = null,
        /** Used to indicate on-premise password synchronization is enabled. */
        public ?bool $passwordSyncEnabled = null,
        /** Used to indicate that writeback of password resets from Microsoft Entra ID to on-premises AD is enabled. This property isn't in use and updating it isn't supported. */
        public ?bool $passwordWritebackEnabled = null,
        /** Used to indicate that we should quarantine objects with conflicting proxy address. */
        public ?bool $quarantineUponProxyAddressesConflictEnabled = null,
        /** Used to indicate that we should quarantine objects conflicting with duplicate userPrincipalName. */
        public ?bool $quarantineUponUpnConflictEnabled = null,
        /** Used to indicate that we should soft match objects based on userPrincipalName. */
        public ?bool $softMatchOnUpnEnabled = null,
        /** Used to indicate that we should synchronize userPrincipalName objects for managed users with licenses. */
        public ?bool $synchronizeUpnForManagedUsersEnabled = null,
        /** Used to indicate that Microsoft 365 Group write-back is enabled. */
        public ?bool $unifiedGroupWritebackEnabled = null,
        /** Used to indicate that feature to force password change for a user on logon is enabled while synchronizing on-premise credentials. */
        public ?bool $userForcePasswordChangeOnLogonEnabled = null,
        /** Used to indicate that user writeback is enabled. */
        public ?string $userWritebackEnabled = null
    ) {}
}

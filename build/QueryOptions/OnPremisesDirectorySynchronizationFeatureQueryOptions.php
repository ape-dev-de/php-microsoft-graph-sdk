<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnPremisesDirectorySynchronizationFeature resources
 *
 * Available select fields:
 * - blockCloudObjectTakeoverThroughHardMatchEnabled
 * - blockSoftMatchEnabled
 * - bypassDirSyncOverridesEnabled
 * - cloudPasswordPolicyForPasswordSyncedUsersEnabled
 * - concurrentCredentialUpdateEnabled
 * - concurrentOrgIdProvisioningEnabled
 * - deviceWritebackEnabled
 * - directoryExtensionsEnabled
 * - fopeConflictResolutionEnabled
 * - groupWriteBackEnabled
 * - passwordSyncEnabled
 * - passwordWritebackEnabled
 * - quarantineUponProxyAddressesConflictEnabled
 * - quarantineUponUpnConflictEnabled
 * - softMatchOnUpnEnabled
 * - synchronizeUpnForManagedUsersEnabled
 * - unifiedGroupWritebackEnabled
 * - userForcePasswordChangeOnLogonEnabled
 * - userWritebackEnabled
 */
class OnPremisesDirectorySynchronizationFeatureQueryOptions extends QueryOptions
{
    public const FIELD_BLOCK_CLOUD_OBJECT_TAKEOVER_THROUGH_HARD_MATCH_ENABLED = 'blockCloudObjectTakeoverThroughHardMatchEnabled';
    public const FIELD_BLOCK_SOFT_MATCH_ENABLED = 'blockSoftMatchEnabled';
    public const FIELD_BYPASS_DIR_SYNC_OVERRIDES_ENABLED = 'bypassDirSyncOverridesEnabled';
    public const FIELD_CLOUD_PASSWORD_POLICY_FOR_PASSWORD_SYNCED_USERS_ENABLED = 'cloudPasswordPolicyForPasswordSyncedUsersEnabled';
    public const FIELD_CONCURRENT_CREDENTIAL_UPDATE_ENABLED = 'concurrentCredentialUpdateEnabled';
    public const FIELD_CONCURRENT_ORG_ID_PROVISIONING_ENABLED = 'concurrentOrgIdProvisioningEnabled';
    public const FIELD_DEVICE_WRITEBACK_ENABLED = 'deviceWritebackEnabled';
    public const FIELD_DIRECTORY_EXTENSIONS_ENABLED = 'directoryExtensionsEnabled';
    public const FIELD_FOPE_CONFLICT_RESOLUTION_ENABLED = 'fopeConflictResolutionEnabled';
    public const FIELD_GROUP_WRITE_BACK_ENABLED = 'groupWriteBackEnabled';
    public const FIELD_PASSWORD_SYNC_ENABLED = 'passwordSyncEnabled';
    public const FIELD_PASSWORD_WRITEBACK_ENABLED = 'passwordWritebackEnabled';
    public const FIELD_QUARANTINE_UPON_PROXY_ADDRESSES_CONFLICT_ENABLED = 'quarantineUponProxyAddressesConflictEnabled';
    public const FIELD_QUARANTINE_UPON_UPN_CONFLICT_ENABLED = 'quarantineUponUpnConflictEnabled';
    public const FIELD_SOFT_MATCH_ON_UPN_ENABLED = 'softMatchOnUpnEnabled';
    public const FIELD_SYNCHRONIZE_UPN_FOR_MANAGED_USERS_ENABLED = 'synchronizeUpnForManagedUsersEnabled';
    public const FIELD_UNIFIED_GROUP_WRITEBACK_ENABLED = 'unifiedGroupWritebackEnabled';
    public const FIELD_USER_FORCE_PASSWORD_CHANGE_ON_LOGON_ENABLED = 'userForcePasswordChangeOnLogonEnabled';
    public const FIELD_USER_WRITEBACK_ENABLED = 'userWritebackEnabled';

    /**
     * Select specific OnPremisesDirectorySynchronizationFeature properties
     * 
     * @param array<string> $select Use OnPremisesDirectorySynchronizationFeatureQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

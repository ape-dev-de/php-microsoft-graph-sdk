<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosDdmLobAppAssignmentSettings resources
 *
 * Available select fields:
 * - associatedDomains
 * - associatedDomainsDirectDownloadAllowed
 * - preventManagedAppBackup
 * - tapToPayScreenLockEnabled
 * - vpnConfigurationId
 */
class IosDdmLobAppAssignmentSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosDdmLobAppAssignmentSettings
     */
    public const FIELD_ASSOCIATED_DOMAINS = 'associatedDomains';
    public const FIELD_ASSOCIATED_DOMAINS_DIRECT_DOWNLOAD_ALLOWED = 'associatedDomainsDirectDownloadAllowed';
    public const FIELD_PREVENT_MANAGED_APP_BACKUP = 'preventManagedAppBackup';
    public const FIELD_TAP_TO_PAY_SCREEN_LOCK_ENABLED = 'tapToPayScreenLockEnabled';
    public const FIELD_VPN_CONFIGURATION_ID = 'vpnConfigurationId';

    /**
     * Select specific IosDdmLobAppAssignmentSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosStoreAppAssignmentSettings resources
 *
 * Available select fields:
 * - isRemovable
 * - uninstallOnDeviceRemoval
 * - vpnConfigurationId
 */
class IosStoreAppAssignmentSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosStoreAppAssignmentSettings
     */
    public const FIELD_IS_REMOVABLE = 'isRemovable';
    public const FIELD_UNINSTALL_ON_DEVICE_REMOVAL = 'uninstallOnDeviceRemoval';
    public const FIELD_VPN_CONFIGURATION_ID = 'vpnConfigurationId';

    /**
     * Select specific IosStoreAppAssignmentSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

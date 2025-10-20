<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosLobAppAssignmentSettings resources
 *
 * Available select fields:
 * - isRemovable
 * - uninstallOnDeviceRemoval
 * - vpnConfigurationId
 */
class IosLobAppAssignmentSettingsQueryOptions extends QueryOptions
{
    public const FIELD_IS_REMOVABLE = 'isRemovable';
    public const FIELD_UNINSTALL_ON_DEVICE_REMOVAL = 'uninstallOnDeviceRemoval';
    public const FIELD_VPN_CONFIGURATION_ID = 'vpnConfigurationId';

    /**
     * Select specific IosLobAppAssignmentSettings properties
     * 
     * @param array<string> $select Use IosLobAppAssignmentSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

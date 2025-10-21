<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosVppAppAssignmentSettings resources
 *
 * Available select fields:
 * - useDeviceLicensing
 * - vpnConfigurationId
 */
class IosVppAppAssignmentSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosVppAppAssignmentSettings
     */
    public const FIELD_USE_DEVICE_LICENSING = 'useDeviceLicensing';
    public const FIELD_VPN_CONFIGURATION_ID = 'vpnConfigurationId';

    /**
     * Select specific IosVppAppAssignmentSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

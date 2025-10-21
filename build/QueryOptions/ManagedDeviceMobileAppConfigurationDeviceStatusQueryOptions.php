<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedDeviceMobileAppConfigurationDeviceStatus resources
 *
 * Available select fields:
 */
class ManagedDeviceMobileAppConfigurationDeviceStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedDeviceMobileAppConfigurationDeviceStatus
     */

    /**
     * Select specific ManagedDeviceMobileAppConfigurationDeviceStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

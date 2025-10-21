<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceConfigurationDeviceStatus resources
 *
 * Available select fields:
 */
class DeviceConfigurationDeviceStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceConfigurationDeviceStatus
     */

    /**
     * Select specific DeviceConfigurationDeviceStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

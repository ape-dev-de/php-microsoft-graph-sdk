<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceConfigurationDeviceOverview resources
 *
 * Available select fields:
 */
class DeviceConfigurationDeviceOverviewQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceConfigurationDeviceOverview
     */

    /**
     * Select specific DeviceConfigurationDeviceOverview properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceConfigurationDeviceStateSummary resources
 *
 * Available select fields:
 */
class DeviceConfigurationDeviceStateSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceConfigurationDeviceStateSummary
     */

    /**
     * Select specific DeviceConfigurationDeviceStateSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

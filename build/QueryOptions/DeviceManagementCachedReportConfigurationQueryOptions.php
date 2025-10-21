<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementCachedReportConfiguration resources
 *
 * Available select fields:
 */
class DeviceManagementCachedReportConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceManagementCachedReportConfiguration
     */

    /**
     * Select specific DeviceManagementCachedReportConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

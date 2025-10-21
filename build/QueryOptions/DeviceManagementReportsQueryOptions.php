<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementReports resources
 *
 * Available select fields:
 */
class DeviceManagementReportsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceManagementReports
     */

    /**
     * Select specific DeviceManagementReports properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

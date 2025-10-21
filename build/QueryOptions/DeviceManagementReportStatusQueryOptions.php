<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementReportStatus resources
 *
 * Available select fields:
 */
class DeviceManagementReportStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceManagementReportStatus
     */

    /**
     * Select specific DeviceManagementReportStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

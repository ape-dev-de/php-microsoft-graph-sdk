<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementReportFileFormat resources
 *
 * Available select fields:
 */
class DeviceManagementReportFileFormatQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceManagementReportFileFormat
     */

    /**
     * Select specific DeviceManagementReportFileFormat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

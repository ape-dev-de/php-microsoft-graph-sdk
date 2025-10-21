<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementExportJob resources
 *
 * Available select fields:
 */
class DeviceManagementExportJobQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceManagementExportJob
     */

    /**
     * Select specific DeviceManagementExportJob properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

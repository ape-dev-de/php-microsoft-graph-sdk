<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceAppManagement resources
 *
 * Available select fields:
 */
class DeviceAppManagementQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceAppManagement
     */

    /**
     * Select specific DeviceAppManagement properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

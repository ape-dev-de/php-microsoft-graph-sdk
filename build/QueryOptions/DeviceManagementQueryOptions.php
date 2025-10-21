<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagement resources
 *
 * Available select fields:
 */
class DeviceManagementQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceManagement
     */

    /**
     * Select specific DeviceManagement properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

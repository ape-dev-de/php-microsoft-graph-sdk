<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceCategory resources
 *
 * Available select fields:
 */
class DeviceCategoryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceCategory
     */

    /**
     * Select specific DeviceCategory properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

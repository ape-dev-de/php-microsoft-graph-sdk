<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedDeviceOwnerType resources
 *
 * Available select fields:
 */
class ManagedDeviceOwnerTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedDeviceOwnerType
     */

    /**
     * Select specific ManagedDeviceOwnerType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

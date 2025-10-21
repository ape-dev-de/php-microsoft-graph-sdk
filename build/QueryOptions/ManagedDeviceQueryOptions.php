<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedDevice resources
 *
 * Available select fields:
 */
class ManagedDeviceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedDevice
     */

    /**
     * Select specific ManagedDevice properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

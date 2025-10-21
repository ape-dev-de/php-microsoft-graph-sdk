<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsDeviceHealthState resources
 *
 * Available select fields:
 */
class WindowsDeviceHealthStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsDeviceHealthState
     */

    /**
     * Select specific WindowsDeviceHealthState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsDeviceADAccount resources
 *
 * Available select fields:
 */
class WindowsDeviceADAccountQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsDeviceADAccount
     */

    /**
     * Select specific WindowsDeviceADAccount properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

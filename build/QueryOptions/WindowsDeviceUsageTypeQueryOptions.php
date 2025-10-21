<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsDeviceUsageType resources
 *
 * Available select fields:
 */
class WindowsDeviceUsageTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsDeviceUsageType
     */

    /**
     * Select specific WindowsDeviceUsageType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

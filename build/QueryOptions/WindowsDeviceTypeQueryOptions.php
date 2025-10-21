<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsDeviceType resources
 *
 * Available select fields:
 */
class WindowsDeviceTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsDeviceType
     */

    /**
     * Select specific WindowsDeviceType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosUpdateDeviceStatus resources
 *
 * Available select fields:
 */
class IosUpdateDeviceStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosUpdateDeviceStatus
     */

    /**
     * Select specific IosUpdateDeviceStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

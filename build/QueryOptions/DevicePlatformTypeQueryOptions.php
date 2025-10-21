<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DevicePlatformType resources
 *
 * Available select fields:
 */
class DevicePlatformTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DevicePlatformType
     */

    /**
     * Select specific DevicePlatformType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

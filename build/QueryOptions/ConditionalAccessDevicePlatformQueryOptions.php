<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessDevicePlatform resources
 *
 * Available select fields:
 */
class ConditionalAccessDevicePlatformQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConditionalAccessDevicePlatform
     */

    /**
     * Select specific ConditionalAccessDevicePlatform properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

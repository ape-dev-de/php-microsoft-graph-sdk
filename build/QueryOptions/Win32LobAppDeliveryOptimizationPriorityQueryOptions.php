<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobAppDeliveryOptimizationPriority resources
 *
 * Available select fields:
 */
class Win32LobAppDeliveryOptimizationPriorityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Win32LobAppDeliveryOptimizationPriority
     */

    /**
     * Select specific Win32LobAppDeliveryOptimizationPriority properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

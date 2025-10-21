<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedDeviceOverview resources
 *
 * Available select fields:
 */
class ManagedDeviceOverviewQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedDeviceOverview
     */

    /**
     * Select specific ManagedDeviceOverview properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementSubscriptionState resources
 *
 * Available select fields:
 */
class DeviceManagementSubscriptionStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceManagementSubscriptionState
     */

    /**
     * Select specific DeviceManagementSubscriptionState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

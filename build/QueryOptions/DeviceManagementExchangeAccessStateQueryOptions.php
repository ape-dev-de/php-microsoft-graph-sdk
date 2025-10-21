<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementExchangeAccessState resources
 *
 * Available select fields:
 */
class DeviceManagementExchangeAccessStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceManagementExchangeAccessState
     */

    /**
     * Select specific DeviceManagementExchangeAccessState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementExchangeAccessStateReason resources
 *
 * Available select fields:
 */
class DeviceManagementExchangeAccessStateReasonQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceManagementExchangeAccessStateReason
     */

    /**
     * Select specific DeviceManagementExchangeAccessStateReason properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

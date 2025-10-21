<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementExchangeConnectorStatus resources
 *
 * Available select fields:
 */
class DeviceManagementExchangeConnectorStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceManagementExchangeConnectorStatus
     */

    /**
     * Select specific DeviceManagementExchangeConnectorStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

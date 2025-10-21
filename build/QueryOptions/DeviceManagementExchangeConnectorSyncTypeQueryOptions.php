<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementExchangeConnectorSyncType resources
 *
 * Available select fields:
 */
class DeviceManagementExchangeConnectorSyncTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceManagementExchangeConnectorSyncType
     */

    /**
     * Select specific DeviceManagementExchangeConnectorSyncType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

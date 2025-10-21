<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementExchangeConnector resources
 *
 * Available select fields:
 */
class DeviceManagementExchangeConnectorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceManagementExchangeConnector
     */

    /**
     * Select specific DeviceManagementExchangeConnector properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

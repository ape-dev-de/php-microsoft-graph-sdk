<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementExchangeConnectorType resources
 *
 * Available select fields:
 */
class DeviceManagementExchangeConnectorTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceManagementExchangeConnectorType
     */

    /**
     * Select specific DeviceManagementExchangeConnectorType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

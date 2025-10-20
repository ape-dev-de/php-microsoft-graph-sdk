<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementExchangeConnectorCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceManagementExchangeConnectorCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceManagementExchangeConnectorCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceManagementExchangeConnectorCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

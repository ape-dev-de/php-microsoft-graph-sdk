<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceLocalCredentialCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceLocalCredentialCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceLocalCredentialCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceLocalCredentialCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

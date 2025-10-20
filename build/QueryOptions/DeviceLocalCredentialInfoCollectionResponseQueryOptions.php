<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceLocalCredentialInfoCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceLocalCredentialInfoCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceLocalCredentialInfoCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceLocalCredentialInfoCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

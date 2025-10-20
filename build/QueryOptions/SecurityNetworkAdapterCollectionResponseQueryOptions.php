<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityNetworkAdapterCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityNetworkAdapterCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityNetworkAdapterCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityNetworkAdapterCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

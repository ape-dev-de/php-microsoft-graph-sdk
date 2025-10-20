<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoverySearchCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityEdiscoverySearchCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityEdiscoverySearchCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityEdiscoverySearchCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

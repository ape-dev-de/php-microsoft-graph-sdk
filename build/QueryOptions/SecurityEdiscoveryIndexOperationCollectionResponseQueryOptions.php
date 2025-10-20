<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryIndexOperationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityEdiscoveryIndexOperationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityEdiscoveryIndexOperationCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityEdiscoveryIndexOperationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

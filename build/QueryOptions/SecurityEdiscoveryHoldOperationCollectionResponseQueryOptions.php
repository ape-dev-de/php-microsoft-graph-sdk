<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryHoldOperationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityEdiscoveryHoldOperationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityEdiscoveryHoldOperationCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityEdiscoveryHoldOperationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

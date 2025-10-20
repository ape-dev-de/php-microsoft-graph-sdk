<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryPurgeDataOperationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityEdiscoveryPurgeDataOperationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityEdiscoveryPurgeDataOperationCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityEdiscoveryPurgeDataOperationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryNoncustodialDataSourceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityEdiscoveryNoncustodialDataSourceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityEdiscoveryNoncustodialDataSourceCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityEdiscoveryNoncustodialDataSourceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

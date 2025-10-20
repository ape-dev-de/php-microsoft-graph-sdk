<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryExportOperationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityEdiscoveryExportOperationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityEdiscoveryExportOperationCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityEdiscoveryExportOperationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

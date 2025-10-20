<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoverySearchExportOperationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityEdiscoverySearchExportOperationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityEdiscoverySearchExportOperationCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityEdiscoverySearchExportOperationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CancelMediaProcessingOperationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CancelMediaProcessingOperationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CancelMediaProcessingOperationCollectionResponse properties
     * 
     * @param array<string> $select Use CancelMediaProcessingOperationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

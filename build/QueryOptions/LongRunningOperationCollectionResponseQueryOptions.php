<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LongRunningOperationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class LongRunningOperationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific LongRunningOperationCollectionResponse properties
     * 
     * @param array<string> $select Use LongRunningOperationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

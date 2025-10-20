<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsAsyncOperationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TeamsAsyncOperationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TeamsAsyncOperationCollectionResponse properties
     * 
     * @param array<string> $select Use TeamsAsyncOperationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

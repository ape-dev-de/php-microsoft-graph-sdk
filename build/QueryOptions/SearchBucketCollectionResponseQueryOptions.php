<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchBucketCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SearchBucketCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SearchBucketCollectionResponse properties
     * 
     * @param array<string> $select Use SearchBucketCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

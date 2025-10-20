<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchHitsContainerCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SearchHitsContainerCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SearchHitsContainerCollectionResponse properties
     * 
     * @param array<string> $select Use SearchHitsContainerCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

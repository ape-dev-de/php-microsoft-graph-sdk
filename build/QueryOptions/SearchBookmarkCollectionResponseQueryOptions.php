<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchBookmarkCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SearchBookmarkCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SearchBookmarkCollectionResponse properties
     * 
     * @param array<string> $select Use SearchBookmarkCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

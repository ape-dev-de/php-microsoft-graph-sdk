<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchAcronymCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SearchAcronymCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SearchAcronymCollectionResponse properties
     * 
     * @param array<string> $select Use SearchAcronymCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

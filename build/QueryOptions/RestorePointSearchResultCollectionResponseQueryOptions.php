<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RestorePointSearchResultCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class RestorePointSearchResultCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific RestorePointSearchResultCollectionResponse properties
     * 
     * @param array<string> $select Use RestorePointSearchResultCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

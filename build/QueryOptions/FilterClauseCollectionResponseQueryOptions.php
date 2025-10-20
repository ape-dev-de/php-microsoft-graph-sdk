<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FilterClauseCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class FilterClauseCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific FilterClauseCollectionResponse properties
     * 
     * @param array<string> $select Use FilterClauseCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

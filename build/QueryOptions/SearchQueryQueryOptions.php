<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchQuery resources
 *
 * Available select fields:
 * - queryString
 * - queryTemplate
 */
class SearchQueryQueryOptions extends QueryOptions
{
    public const FIELD_QUERY_STRING = 'queryString';
    public const FIELD_QUERY_TEMPLATE = 'queryTemplate';

    /**
     * Select specific SearchQuery properties
     * 
     * @param array<string> $select Use SearchQueryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

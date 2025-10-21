<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchAlteration resources
 *
 * Available select fields:
 * - alteredHighlightedQueryString
 * - alteredQueryString
 * - alteredQueryTokens
 */
class SearchAlterationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SearchAlteration
     */
    public const FIELD_ALTERED_HIGHLIGHTED_QUERY_STRING = 'alteredHighlightedQueryString';
    public const FIELD_ALTERED_QUERY_STRING = 'alteredQueryString';
    public const FIELD_ALTERED_QUERY_TOKENS = 'alteredQueryTokens';

    /**
     * Select specific SearchAlteration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

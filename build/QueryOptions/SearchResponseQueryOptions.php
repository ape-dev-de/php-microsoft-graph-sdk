<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchResponse resources
 *
 * Available select fields:
 * - hitsContainers
 * - queryAlterationResponse
 * - resultTemplates
 * - searchTerms
 */
class SearchResponseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SearchResponse
     */
    public const FIELD_HITS_CONTAINERS = 'hitsContainers';
    public const FIELD_QUERY_ALTERATION_RESPONSE = 'queryAlterationResponse';
    public const FIELD_RESULT_TEMPLATES = 'resultTemplates';
    public const FIELD_SEARCH_TERMS = 'searchTerms';

    /**
     * Select specific SearchResponse properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

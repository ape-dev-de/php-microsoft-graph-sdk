<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewQueryScope resources
 *
 * Available select fields:
 * - query
 * - queryRoot
 * - queryType
 */
class AccessReviewQueryScopeQueryOptions extends QueryOptions
{
    public const FIELD_QUERY = 'query';
    public const FIELD_QUERY_ROOT = 'queryRoot';
    public const FIELD_QUERY_TYPE = 'queryType';

    /**
     * Select specific AccessReviewQueryScope properties
     * 
     * @param array<string> $select Use AccessReviewQueryScopeQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

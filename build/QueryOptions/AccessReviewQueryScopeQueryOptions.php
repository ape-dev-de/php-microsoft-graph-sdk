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
    /**
     * Available select fields for AccessReviewQueryScope
     */
    public const FIELD_QUERY = 'query';
    public const FIELD_QUERY_ROOT = 'queryRoot';
    public const FIELD_QUERY_TYPE = 'queryType';

    /**
     * Select specific AccessReviewQueryScope properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

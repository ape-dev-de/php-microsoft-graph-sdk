<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewReviewerScope resources
 *
 * Available select fields:
 * - query
 * - queryRoot
 * - queryType
 */
class AccessReviewReviewerScopeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewReviewerScope
     */
    public const FIELD_QUERY = 'query';
    public const FIELD_QUERY_ROOT = 'queryRoot';
    public const FIELD_QUERY_TYPE = 'queryType';

    /**
     * Select specific AccessReviewReviewerScope properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

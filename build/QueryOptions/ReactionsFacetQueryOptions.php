<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ReactionsFacet resources
 *
 * Available select fields:
 * - commentCount
 * - likeCount
 * - shareCount
 */
class ReactionsFacetQueryOptions extends QueryOptions
{
    public const FIELD_COMMENT_COUNT = 'commentCount';
    public const FIELD_LIKE_COUNT = 'likeCount';
    public const FIELD_SHARE_COUNT = 'shareCount';

    /**
     * Select specific ReactionsFacet properties
     * 
     * @param array<string> $select Use ReactionsFacetQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

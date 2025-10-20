<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityArticle resources
 *
 * Available select fields:
 * - body
 * - createdDateTime
 * - imageUrl
 * - isFeatured
 * - lastUpdatedDateTime
 * - summary
 * - tags
 * - title
 * - indicators
 */
class SecurityArticleQueryOptions extends QueryOptions
{
    public const FIELD_BODY = 'body';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_IMAGE_URL = 'imageUrl';
    public const FIELD_IS_FEATURED = 'isFeatured';
    public const FIELD_LAST_UPDATED_DATE_TIME = 'lastUpdatedDateTime';
    public const FIELD_SUMMARY = 'summary';
    public const FIELD_TAGS = 'tags';
    public const FIELD_TITLE = 'title';
    public const FIELD_INDICATORS = 'indicators';

    /**
     * Select specific SecurityArticle properties
     * 
     * @param array<string> $select Use SecurityArticleQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

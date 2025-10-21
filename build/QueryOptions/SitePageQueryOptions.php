<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SitePage resources
 *
 * Available select fields:
 * - promotionKind
 * - reactions
 * - showComments
 * - showRecommendedPages
 * - thumbnailWebUrl
 * - titleArea
 * - canvasLayout
 * - webParts
 */
class SitePageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SitePage
     */
    public const FIELD_PROMOTION_KIND = 'promotionKind';
    public const FIELD_REACTIONS = 'reactions';
    public const FIELD_SHOW_COMMENTS = 'showComments';
    public const FIELD_SHOW_RECOMMENDED_PAGES = 'showRecommendedPages';
    public const FIELD_THUMBNAIL_WEB_URL = 'thumbnailWebUrl';
    public const FIELD_TITLE_AREA = 'titleArea';
    public const FIELD_CANVAS_LAYOUT = 'canvasLayout';
    public const FIELD_WEB_PARTS = 'webParts';

    /**
     * Select specific SitePage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

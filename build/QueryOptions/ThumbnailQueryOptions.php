<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Thumbnail resources
 *
 * Available select fields:
 * - content
 * - height
 * - sourceItemId
 * - url
 * - width
 */
class ThumbnailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Thumbnail
     */
    public const FIELD_CONTENT = 'content';
    public const FIELD_HEIGHT = 'height';
    public const FIELD_SOURCE_ITEM_ID = 'sourceItemId';
    public const FIELD_URL = 'url';
    public const FIELD_WIDTH = 'width';

    /**
     * Select specific Thumbnail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Thumbnail
 */
class Thumbnail
{
    public function __construct(
        /** The content stream for the thumbnail. */
        public ?string $content = null,
        /** The height of the thumbnail, in pixels. */
        public ?float $height = null,
        /** The unique identifier of the item that provided the thumbnail. This is only available when a folder thumbnail is requested. */
        public ?string $sourceItemId = null,
        /** The URL used to fetch the thumbnail content. */
        public ?string $url = null,
        /** The width of the thumbnail, in pixels. */
        public ?string $width = null
    ) {}
}

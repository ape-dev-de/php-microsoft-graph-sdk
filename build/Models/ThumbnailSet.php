<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ThumbnailSet
 */
class ThumbnailSet
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** A 1920x1920 scaled thumbnail. */
        public ?Thumbnail $large = null,
        /** A 176x176 scaled thumbnail. */
        public ?Thumbnail $medium = null,
        /** A 48x48 cropped thumbnail. */
        public ?Thumbnail $small = null,
        /** A custom thumbnail image or the original image used to generate other thumbnails. */
        public ?Thumbnail $source = null
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaSource
 */
class MediaSource
{
    public function __construct(
        /** Enumeration value that indicates the media content category. */
        public ?MediaSourceContentCategory $contentCategory = null
    ) {}
}

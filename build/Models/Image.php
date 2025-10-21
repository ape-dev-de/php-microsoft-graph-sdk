<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Image
 */
class Image
{
    public function __construct(
        /** Optional. Height of the image, in pixels. Read-only. */
        public ?float $height = null,
        /** Optional. Width of the image, in pixels. Read-only. */
        public ?string $width = null
    ) {}
}

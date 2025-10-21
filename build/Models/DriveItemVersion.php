<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveItemVersion
 */
class DriveItemVersion
{
    public function __construct(
        /** The content stream for this version of the item. */
        public ?string $content = null,
        /** Indicates the size of the content stream for this version of the item. */
        public ?string $size = null
    ) {}
}

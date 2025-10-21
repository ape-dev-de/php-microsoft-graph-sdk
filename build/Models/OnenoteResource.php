<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenoteResource
 */
class OnenoteResource
{
    public function __construct(
        /** The content stream */
        public ?string $content = null,
        /** The URL for downloading the content */
        public ?string $contentUrl = null
    ) {}
}

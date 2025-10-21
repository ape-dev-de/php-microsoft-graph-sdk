<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TextWebPart
 */
class TextWebPart
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The HTML string in text web part. */
        public ?string $innerHtml = null
    ) {}
}

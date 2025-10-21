<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ItemBody
 */
class ItemBody
{
    public function __construct(
        /** The content of the item. */
        public ?string $content = null,
        /** The type of the content. Possible values are text and html. */
        public ?string $contentType = null
    ) {}
}

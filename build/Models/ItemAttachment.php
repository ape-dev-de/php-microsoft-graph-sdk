<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ItemAttachment
 */
class ItemAttachment
{
    public function __construct(
        /** The attached message or event. Navigation property. */
        public ?string $item = null
    ) {}
}

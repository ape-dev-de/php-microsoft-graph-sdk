<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * HyperlinkOrPictureColumn
 */
class HyperlinkOrPictureColumn
{
    public function __construct(
        /** Specifies whether the display format used for URL columns is an image or a hyperlink. */
        public ?bool $isPicture = null
    ) {}
}

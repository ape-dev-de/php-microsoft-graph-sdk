<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PageLinks
 */
class PageLinks
{
    public function __construct(
        /** Opens the page in the OneNote native client if it's installed. */
        public ?string $oneNoteClientUrl = null,
        /** Opens the page in OneNote on the web. */
        public ?string $oneNoteWebUrl = null
    ) {}
}

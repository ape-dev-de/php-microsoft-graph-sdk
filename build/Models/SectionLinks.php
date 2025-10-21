<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SectionLinks
 */
class SectionLinks
{
    public function __construct(
        /** Opens the section in the OneNote native client if it's installed. */
        public ?string $oneNoteClientUrl = null,
        /** Opens the section in OneNote on the web. */
        public ?string $oneNoteWebUrl = null
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenoteSection
 */
class OnenoteSection
{
    public function __construct(
        /** Indicates whether this is the user's default section. Read-only. */
        public ?bool $isDefault = null,
        /** Links for opening the section. The oneNoteClientURL link opens the section in the OneNote native client if it's installed. The oneNoteWebURL link opens the section in OneNote on the web. */
        public ?string $links = null,
        /** The pages endpoint where you can get details for all the pages in the section. Read-only. */
        public ?string $pagesUrl = null,
        /** The collection of pages in the section.  Read-only. Nullable. */
        public array $pages = [],
        /** The notebook that contains the section.  Read-only. */
        public ?string $parentNotebook = null,
        /** The section group that contains the section.  Read-only. */
        public ?string $parentSectionGroup = null
    ) {}
}

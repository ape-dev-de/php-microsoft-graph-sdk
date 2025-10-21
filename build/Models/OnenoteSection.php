<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenoteSection
 */
class OnenoteSection
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The endpoint where you can get details about the page. Read-only. */
        public ?string $self = null,
        /** The date and time when the page was created. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Identity of the user, device, and application that created the item. Read-only. */
        public ?IdentitySet $createdBy = null,
        /** The name of the notebook. */
        public ?string $displayName = null,
        /** Identity of the user, device, and application that created the item. Read-only. */
        public ?IdentitySet $lastModifiedBy = null,
        /** The date and time when the notebook was last modified. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Indicates whether this is the user's default section. Read-only. */
        public ?bool $isDefault = null,
        /** Links for opening the section. The oneNoteClientURL link opens the section in the OneNote native client if it's installed. The oneNoteWebURL link opens the section in OneNote on the web. */
        public ?SectionLinks $links = null,
        /** The pages endpoint where you can get details for all the pages in the section. Read-only. */
        public ?string $pagesUrl = null,
        /** The collection of pages in the section.  Read-only. Nullable. */
        public array $pages = [],
        /** The notebook that contains the section.  Read-only. */
        public ?Notebook $parentNotebook = null,
        /** The section group that contains the section.  Read-only. */
        public ?SectionGroup $parentSectionGroup = null
    ) {}
}

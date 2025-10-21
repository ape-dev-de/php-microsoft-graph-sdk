<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenotePage
 */
class OnenotePage
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The endpoint where you can get details about the page. Read-only. */
        public ?string $self = null,
        /** The date and time when the page was created. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The page's HTML content. */
        public ?string $content = null,
        /** The URL for the page's HTML content.  Read-only. */
        public ?string $contentUrl = null,
        /** The unique identifier of the application that created the page. Read-only. */
        public ?string $createdByAppId = null,
        /** The date and time when the page was last modified. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The indentation level of the page. Read-only. */
        public ?float $level = null,
        /** Links for opening the page. The oneNoteClientURL link opens the page in the OneNote native client if it 's installed. The oneNoteWebUrl link opens the page in OneNote on the web. Read-only. */
        public ?PageLinks $links = null,
        /** The order of the page within its parent section. Read-only. */
        public ?float $order = null,
        /** The title of the page. */
        public ?string $title = null,
        /** @var string[]  */
        public array $userTags = [],
        /** The notebook that contains the page.  Read-only. */
        public ?Notebook $parentNotebook = null,
        /** The section that contains the page. Read-only. */
        public ?OnenoteSection $parentSection = null
    ) {}
}

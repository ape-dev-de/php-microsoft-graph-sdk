<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecentNotebook
 */
class RecentNotebook
{
    public function __construct(
        /** The name of the notebook. */
        public ?string $displayName = null,
        /** The date and time when the notebook was last modified. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $lastAccessedTime = null,
        /** Links for opening the notebook. The oneNoteClientURL link opens the notebook in the OneNote client, if it's installed. The oneNoteWebURL link opens the notebook in OneNote on the web. */
        public ?RecentNotebookLinks $links = null,
        /** The backend store where the Notebook resides, either OneDriveForBusiness or OneDrive. */
        public ?OnenoteSourceService $sourceService = null
    ) {}
}

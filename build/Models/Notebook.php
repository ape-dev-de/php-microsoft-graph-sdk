<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Notebook
 */
class Notebook
{
    public function __construct(
        /** Indicates whether this is the user's default notebook. Read-only. */
        public ?bool $isDefault = null,
        /** Indicates whether the notebook is shared. If true, the contents of the notebook can be seen by people other than the owner. Read-only. */
        public ?bool $isShared = null,
        /** Links for opening the notebook. The oneNoteClientURL link opens the notebook in the OneNote native client if it's installed. The oneNoteWebURL link opens the notebook in OneNote on the web. */
        public ?string $links = null,
        /** The URL for the sectionGroups navigation property, which returns all the section groups in the notebook. Read-only. */
        public ?string $sectionGroupsUrl = null,
        /** The URL for the sections navigation property, which returns all the sections in the notebook. Read-only. */
        public ?string $sectionsUrl = null,
        /** Possible values are: Owner, Contributor, Reader, None. Owner represents owner-level access to the notebook. Contributor represents read/write access to the notebook. Reader represents read-only access to the notebook. Read-only. */
        public ?string $userRole = null,
        /** The section groups in the notebook. Read-only. Nullable. */
        public array $sectionGroups = [],
        /** @var string[] The sections in the notebook. Read-only. Nullable. */
        public array $sections = []
    ) {}
}

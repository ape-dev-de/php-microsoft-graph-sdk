<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SectionGroup
 */
class SectionGroup
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
        /** The URL for the sectionGroups navigation property, which returns all the section groups in the section group. Read-only. */
        public ?string $sectionGroupsUrl = null,
        /** The URL for the sections navigation property, which returns all the sections in the section group. Read-only. */
        public ?string $sectionsUrl = null,
        /** The notebook that contains the section group. Read-only. */
        public ?Notebook $parentNotebook = null,
        /** The section group that contains the section group. Read-only. */
        public ?SectionGroup $parentSectionGroup = null,
        /** The section groups in the section. Read-only. Nullable. */
        public array $sectionGroups = [],
        /** The sections in the section group. Read-only. Nullable. */
        public array $sections = []
    ) {}
}

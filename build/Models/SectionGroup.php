<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SectionGroup
 */
class SectionGroup
{
    public function __construct(
        /** The URL for the sectionGroups navigation property, which returns all the section groups in the section group. Read-only. */
        public ?string $sectionGroupsUrl = null,
        /** The URL for the sections navigation property, which returns all the sections in the section group. Read-only. */
        public ?string $sectionsUrl = null,
        /** The notebook that contains the section group. Read-only. */
        public ?string $parentNotebook = null,
        /** The section group that contains the section group. Read-only. */
        public ?string $parentSectionGroup = null,
        /** The section groups in the section. Read-only. Nullable. */
        public array $sectionGroups = [],
        /** @var string[] The sections in the section group. Read-only. Nullable. */
        public array $sections = []
    ) {}
}

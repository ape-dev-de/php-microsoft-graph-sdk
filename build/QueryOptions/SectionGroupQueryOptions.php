<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SectionGroup resources
 *
 * Available select fields:
 * - sectionGroupsUrl
 * - sectionsUrl
 * - parentNotebook
 * - parentSectionGroup
 * - sectionGroups
 * - sections
 */
class SectionGroupQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SectionGroup
     */
    public const FIELD_SECTION_GROUPS_URL = 'sectionGroupsUrl';
    public const FIELD_SECTIONS_URL = 'sectionsUrl';
    public const FIELD_PARENT_NOTEBOOK = 'parentNotebook';
    public const FIELD_PARENT_SECTION_GROUP = 'parentSectionGroup';
    public const FIELD_SECTION_GROUPS = 'sectionGroups';
    public const FIELD_SECTIONS = 'sections';

    /**
     * Select specific SectionGroup properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

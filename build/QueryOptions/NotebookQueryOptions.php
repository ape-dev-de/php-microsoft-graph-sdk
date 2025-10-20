<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Notebook resources
 *
 * Available select fields:
 * - isDefault
 * - isShared
 * - links
 * - sectionGroupsUrl
 * - sectionsUrl
 * - userRole
 * - sectionGroups
 * - sections
 */
class NotebookQueryOptions extends QueryOptions
{
    public const FIELD_IS_DEFAULT = 'isDefault';
    public const FIELD_IS_SHARED = 'isShared';
    public const FIELD_LINKS = 'links';
    public const FIELD_SECTION_GROUPS_URL = 'sectionGroupsUrl';
    public const FIELD_SECTIONS_URL = 'sectionsUrl';
    public const FIELD_USER_ROLE = 'userRole';
    public const FIELD_SECTION_GROUPS = 'sectionGroups';
    public const FIELD_SECTIONS = 'sections';

    /**
     * Select specific Notebook properties
     * 
     * @param array<string> $select Use NotebookQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

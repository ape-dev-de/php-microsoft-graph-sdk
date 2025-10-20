<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Onenote resources
 *
 * Available select fields:
 * - notebooks
 * - operations
 * - pages
 * - resources
 * - sectionGroups
 * - sections
 */
class OnenoteQueryOptions extends QueryOptions
{
    public const FIELD_NOTEBOOKS = 'notebooks';
    public const FIELD_OPERATIONS = 'operations';
    public const FIELD_PAGES = 'pages';
    public const FIELD_RESOURCES = 'resources';
    public const FIELD_SECTION_GROUPS = 'sectionGroups';
    public const FIELD_SECTIONS = 'sections';

    /**
     * Select specific Onenote properties
     * 
     * @param array<string> $select Use OnenoteQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

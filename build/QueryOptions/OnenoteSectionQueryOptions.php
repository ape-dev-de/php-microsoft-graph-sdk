<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnenoteSection resources
 *
 * Available select fields:
 * - isDefault
 * - links
 * - pagesUrl
 * - pages
 * - parentNotebook
 * - parentSectionGroup
 */
class OnenoteSectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnenoteSection
     */
    public const FIELD_IS_DEFAULT = 'isDefault';
    public const FIELD_LINKS = 'links';
    public const FIELD_PAGES_URL = 'pagesUrl';
    public const FIELD_PAGES = 'pages';
    public const FIELD_PARENT_NOTEBOOK = 'parentNotebook';
    public const FIELD_PARENT_SECTION_GROUP = 'parentSectionGroup';

    /**
     * Select specific OnenoteSection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BaseSitePage resources
 *
 * Available select fields:
 * - pageLayout
 * - publishingState
 * - title
 */
class BaseSitePageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BaseSitePage
     */
    public const FIELD_PAGE_LAYOUT = 'pageLayout';
    public const FIELD_PUBLISHING_STATE = 'publishingState';
    public const FIELD_TITLE = 'title';

    /**
     * Select specific BaseSitePage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FolderView resources
 *
 * Available select fields:
 * - sortBy
 * - sortOrder
 * - viewType
 */
class FolderViewQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FolderView
     */
    public const FIELD_SORT_BY = 'sortBy';
    public const FIELD_SORT_ORDER = 'sortOrder';
    public const FIELD_VIEW_TYPE = 'viewType';

    /**
     * Select specific FolderView properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

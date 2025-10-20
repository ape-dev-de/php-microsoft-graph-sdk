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
    public const FIELD_SORT_BY = 'sortBy';
    public const FIELD_SORT_ORDER = 'sortOrder';
    public const FIELD_VIEW_TYPE = 'viewType';

    /**
     * Select specific FolderView properties
     * 
     * @param array<string> $select Use FolderViewQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

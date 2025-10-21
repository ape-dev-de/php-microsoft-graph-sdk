<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookSortField resources
 *
 * Available select fields:
 * - ascending
 * - color
 * - dataOption
 * - icon
 * - key
 * - sortOn
 */
class WorkbookSortFieldQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookSortField
     */
    public const FIELD_ASCENDING = 'ascending';
    public const FIELD_COLOR = 'color';
    public const FIELD_DATA_OPTION = 'dataOption';
    public const FIELD_ICON = 'icon';
    public const FIELD_KEY = 'key';
    public const FIELD_SORT_ON = 'sortOn';

    /**
     * Select specific WorkbookSortField properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

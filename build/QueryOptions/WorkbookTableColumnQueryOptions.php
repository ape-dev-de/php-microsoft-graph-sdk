<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookTableColumn resources
 *
 * Available select fields:
 * - index
 * - name
 * - values
 * - filter
 */
class WorkbookTableColumnQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookTableColumn
     */
    public const FIELD_INDEX = 'index';
    public const FIELD_NAME = 'name';
    public const FIELD_VALUES = 'values';
    public const FIELD_FILTER = 'filter';

    /**
     * Select specific WorkbookTableColumn properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

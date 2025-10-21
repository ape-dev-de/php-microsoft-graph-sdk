<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookPivotTable resources
 *
 * Available select fields:
 * - name
 * - worksheet
 */
class WorkbookPivotTableQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookPivotTable
     */
    public const FIELD_NAME = 'name';
    public const FIELD_WORKSHEET = 'worksheet';

    /**
     * Select specific WorkbookPivotTable properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

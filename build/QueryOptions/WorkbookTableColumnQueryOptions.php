<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookTableColumn resources
 *
 * Available select fields:
 */
class WorkbookTableColumnQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookTableColumn
     */

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

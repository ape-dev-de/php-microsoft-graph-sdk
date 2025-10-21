<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookWorksheet resources
 *
 * Available select fields:
 */
class WorkbookWorksheetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookWorksheet
     */

    /**
     * Select specific WorkbookWorksheet properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

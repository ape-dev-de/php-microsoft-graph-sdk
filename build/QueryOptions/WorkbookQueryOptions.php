<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Workbook resources
 *
 * Available select fields:
 */
class WorkbookQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Workbook
     */

    /**
     * Select specific Workbook properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

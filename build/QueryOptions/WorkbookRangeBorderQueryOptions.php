<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookRangeBorder resources
 *
 * Available select fields:
 */
class WorkbookRangeBorderQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookRangeBorder
     */

    /**
     * Select specific WorkbookRangeBorder properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

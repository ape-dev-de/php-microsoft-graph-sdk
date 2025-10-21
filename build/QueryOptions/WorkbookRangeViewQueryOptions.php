<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookRangeView resources
 *
 * Available select fields:
 */
class WorkbookRangeViewQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookRangeView
     */

    /**
     * Select specific WorkbookRangeView properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookRangeFill resources
 *
 * Available select fields:
 */
class WorkbookRangeFillQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookRangeFill
     */

    /**
     * Select specific WorkbookRangeFill properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

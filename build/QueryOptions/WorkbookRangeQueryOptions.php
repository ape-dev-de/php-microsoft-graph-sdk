<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookRange resources
 *
 * Available select fields:
 */
class WorkbookRangeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookRange
     */

    /**
     * Select specific WorkbookRange properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

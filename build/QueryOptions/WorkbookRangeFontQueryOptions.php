<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookRangeFont resources
 *
 * Available select fields:
 */
class WorkbookRangeFontQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookRangeFont
     */

    /**
     * Select specific WorkbookRangeFont properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

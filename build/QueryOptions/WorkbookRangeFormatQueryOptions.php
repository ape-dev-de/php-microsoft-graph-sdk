<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookRangeFormat resources
 *
 * Available select fields:
 */
class WorkbookRangeFormatQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookRangeFormat
     */

    /**
     * Select specific WorkbookRangeFormat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookTable resources
 *
 * Available select fields:
 */
class WorkbookTableQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookTable
     */

    /**
     * Select specific WorkbookTable properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

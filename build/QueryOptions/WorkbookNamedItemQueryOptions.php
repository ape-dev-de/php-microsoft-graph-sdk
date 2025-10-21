<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookNamedItem resources
 *
 * Available select fields:
 */
class WorkbookNamedItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookNamedItem
     */

    /**
     * Select specific WorkbookNamedItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

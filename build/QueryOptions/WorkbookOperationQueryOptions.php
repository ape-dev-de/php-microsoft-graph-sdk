<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookOperation resources
 *
 * Available select fields:
 */
class WorkbookOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookOperation
     */

    /**
     * Select specific WorkbookOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

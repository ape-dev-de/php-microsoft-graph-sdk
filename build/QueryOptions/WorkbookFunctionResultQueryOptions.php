<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookFunctionResult resources
 *
 * Available select fields:
 */
class WorkbookFunctionResultQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookFunctionResult
     */

    /**
     * Select specific WorkbookFunctionResult properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

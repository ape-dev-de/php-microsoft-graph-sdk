<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookFunctions resources
 *
 * Available select fields:
 */
class WorkbookFunctionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookFunctions
     */

    /**
     * Select specific WorkbookFunctions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

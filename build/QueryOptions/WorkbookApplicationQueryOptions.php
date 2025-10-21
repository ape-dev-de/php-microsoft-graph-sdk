<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookApplication resources
 *
 * Available select fields:
 */
class WorkbookApplicationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookApplication
     */

    /**
     * Select specific WorkbookApplication properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

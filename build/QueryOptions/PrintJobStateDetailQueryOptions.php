<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintJobStateDetail resources
 *
 * Available select fields:
 */
class PrintJobStateDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintJobStateDetail
     */

    /**
     * Select specific PrintJobStateDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

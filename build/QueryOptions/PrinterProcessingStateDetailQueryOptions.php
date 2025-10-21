<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrinterProcessingStateDetail resources
 *
 * Available select fields:
 */
class PrinterProcessingStateDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrinterProcessingStateDetail
     */

    /**
     * Select specific PrinterProcessingStateDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

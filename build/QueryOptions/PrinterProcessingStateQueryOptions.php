<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrinterProcessingState resources
 *
 * Available select fields:
 */
class PrinterProcessingStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrinterProcessingState
     */

    /**
     * Select specific PrinterProcessingState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

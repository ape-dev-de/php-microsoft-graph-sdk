<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintJobProcessingState resources
 *
 * Available select fields:
 */
class PrintJobProcessingStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintJobProcessingState
     */

    /**
     * Select specific PrintJobProcessingState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

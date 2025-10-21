<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintOperationProcessingState resources
 *
 * Available select fields:
 */
class PrintOperationProcessingStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintOperationProcessingState
     */

    /**
     * Select specific PrintOperationProcessingState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

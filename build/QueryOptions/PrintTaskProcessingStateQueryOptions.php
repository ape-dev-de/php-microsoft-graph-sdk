<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintTaskProcessingState resources
 *
 * Available select fields:
 */
class PrintTaskProcessingStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintTaskProcessingState
     */

    /**
     * Select specific PrintTaskProcessingState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

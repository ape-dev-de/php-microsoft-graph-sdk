<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExecutionMode resources
 *
 * Available select fields:
 */
class ExecutionModeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExecutionMode
     */

    /**
     * Select specific ExecutionMode properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

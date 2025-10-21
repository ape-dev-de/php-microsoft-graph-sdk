<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Operation resources
 *
 * Available select fields:
 */
class OperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Operation
     */

    /**
     * Select specific Operation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

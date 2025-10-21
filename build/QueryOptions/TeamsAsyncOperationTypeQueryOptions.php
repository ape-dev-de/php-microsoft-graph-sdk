<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsAsyncOperationType resources
 *
 * Available select fields:
 */
class TeamsAsyncOperationTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamsAsyncOperationType
     */

    /**
     * Select specific TeamsAsyncOperationType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

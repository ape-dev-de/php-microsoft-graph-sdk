<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsAsyncOperationStatus resources
 *
 * Available select fields:
 */
class TeamsAsyncOperationStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamsAsyncOperationStatus
     */

    /**
     * Select specific TeamsAsyncOperationStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LongRunningOperationStatus resources
 *
 * Available select fields:
 */
class LongRunningOperationStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LongRunningOperationStatus
     */

    /**
     * Select specific LongRunningOperationStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

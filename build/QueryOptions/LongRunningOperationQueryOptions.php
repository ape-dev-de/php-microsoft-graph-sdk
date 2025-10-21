<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LongRunningOperation resources
 *
 * Available select fields:
 */
class LongRunningOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LongRunningOperation
     */

    /**
     * Select specific LongRunningOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

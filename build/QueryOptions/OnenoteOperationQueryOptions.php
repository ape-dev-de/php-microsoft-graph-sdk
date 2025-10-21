<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnenoteOperation resources
 *
 * Available select fields:
 */
class OnenoteOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnenoteOperation
     */

    /**
     * Select specific OnenoteOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OperationStatus resources
 *
 * Available select fields:
 */
class OperationStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OperationStatus
     */

    /**
     * Select specific OperationStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

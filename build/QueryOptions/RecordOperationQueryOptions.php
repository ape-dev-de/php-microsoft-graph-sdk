<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RecordOperation resources
 *
 * Available select fields:
 */
class RecordOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RecordOperation
     */

    /**
     * Select specific RecordOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

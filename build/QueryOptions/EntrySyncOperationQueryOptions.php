<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EntrySyncOperation resources
 *
 * Available select fields:
 */
class EntrySyncOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EntrySyncOperation
     */

    /**
     * Select specific EntrySyncOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

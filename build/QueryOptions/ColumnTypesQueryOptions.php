<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ColumnTypes resources
 *
 * Available select fields:
 */
class ColumnTypesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ColumnTypes
     */

    /**
     * Select specific ColumnTypes properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BooleanColumn resources
 *
 * Available select fields:
 */
class BooleanColumnQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BooleanColumn
     */

    /**
     * Select specific BooleanColumn properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

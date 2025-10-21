<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ShiftItem resources
 *
 * Available select fields:
 */
class ShiftItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ShiftItem
     */

    /**
     * Select specific ShiftItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

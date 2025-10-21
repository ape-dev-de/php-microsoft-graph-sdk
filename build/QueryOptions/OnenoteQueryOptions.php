<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Onenote resources
 *
 * Available select fields:
 */
class OnenoteQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Onenote
     */

    /**
     * Select specific Onenote properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

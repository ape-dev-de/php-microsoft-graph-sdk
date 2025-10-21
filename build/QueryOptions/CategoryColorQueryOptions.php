<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CategoryColor resources
 *
 * Available select fields:
 */
class CategoryColorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CategoryColor
     */

    /**
     * Select specific CategoryColor properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

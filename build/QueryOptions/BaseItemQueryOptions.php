<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BaseItem resources
 *
 * Available select fields:
 */
class BaseItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BaseItem
     */

    /**
     * Select specific BaseItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

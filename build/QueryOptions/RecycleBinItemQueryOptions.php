<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RecycleBinItem resources
 *
 * Available select fields:
 */
class RecycleBinItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RecycleBinItem
     */

    /**
     * Select specific RecycleBinItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

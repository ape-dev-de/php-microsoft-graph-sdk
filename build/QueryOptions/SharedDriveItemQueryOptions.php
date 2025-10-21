<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharedDriveItem resources
 *
 * Available select fields:
 */
class SharedDriveItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SharedDriveItem
     */

    /**
     * Select specific SharedDriveItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

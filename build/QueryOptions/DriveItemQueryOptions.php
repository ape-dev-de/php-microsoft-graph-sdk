<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DriveItem resources
 *
 * Available select fields:
 */
class DriveItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DriveItem
     */

    /**
     * Select specific DriveItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

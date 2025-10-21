<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DiskType resources
 *
 * Available select fields:
 */
class DiskTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DiskType
     */

    /**
     * Select specific DiskType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Drive resources
 *
 * Available select fields:
 */
class DriveQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Drive
     */

    /**
     * Select specific Drive properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

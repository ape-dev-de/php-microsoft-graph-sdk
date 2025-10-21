<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DriveItemSourceApplication resources
 *
 * Available select fields:
 */
class DriveItemSourceApplicationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DriveItemSourceApplication
     */

    /**
     * Select specific DriveItemSourceApplication properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

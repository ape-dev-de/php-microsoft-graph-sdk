<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DriveItemVersion resources
 *
 * Available select fields:
 */
class DriveItemVersionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DriveItemVersion
     */

    /**
     * Select specific DriveItemVersion properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

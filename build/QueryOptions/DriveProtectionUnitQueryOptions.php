<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DriveProtectionUnit resources
 *
 * Available select fields:
 */
class DriveProtectionUnitQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DriveProtectionUnit
     */

    /**
     * Select specific DriveProtectionUnit properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

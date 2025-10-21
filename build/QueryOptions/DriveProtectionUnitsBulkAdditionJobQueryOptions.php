<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DriveProtectionUnitsBulkAdditionJob resources
 *
 * Available select fields:
 */
class DriveProtectionUnitsBulkAdditionJobQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DriveProtectionUnitsBulkAdditionJob
     */

    /**
     * Select specific DriveProtectionUnitsBulkAdditionJob properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MigrationStatus resources
 *
 * Available select fields:
 */
class MigrationStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MigrationStatus
     */

    /**
     * Select specific MigrationStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

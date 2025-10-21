<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BackupServiceStatus resources
 *
 * Available select fields:
 */
class BackupServiceStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BackupServiceStatus
     */

    /**
     * Select specific BackupServiceStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

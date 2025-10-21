<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DirectoryAudit resources
 *
 * Available select fields:
 */
class DirectoryAuditQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DirectoryAudit
     */

    /**
     * Select specific DirectoryAudit properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuditLogRoot resources
 *
 * Available select fields:
 */
class AuditLogRootQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuditLogRoot
     */

    /**
     * Select specific AuditLogRoot properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuditLogUserType resources
 *
 * Available select fields:
 */
class AuditLogUserTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuditLogUserType
     */

    /**
     * Select specific AuditLogUserType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuditLogRecordType resources
 *
 * Available select fields:
 */
class AuditLogRecordTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuditLogRecordType
     */

    /**
     * Select specific AuditLogRecordType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

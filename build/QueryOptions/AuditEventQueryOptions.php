<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuditEvent resources
 *
 * Available select fields:
 */
class AuditEventQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuditEvent
     */

    /**
     * Select specific AuditEvent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

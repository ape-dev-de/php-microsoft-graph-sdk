<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcAuditEvent resources
 *
 * Available select fields:
 */
class CloudPcAuditEventQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudPcAuditEvent
     */

    /**
     * Select specific CloudPcAuditEvent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

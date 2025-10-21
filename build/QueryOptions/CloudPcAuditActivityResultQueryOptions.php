<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcAuditActivityResult resources
 *
 * Available select fields:
 */
class CloudPcAuditActivityResultQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudPcAuditActivityResult
     */

    /**
     * Select specific CloudPcAuditActivityResult properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

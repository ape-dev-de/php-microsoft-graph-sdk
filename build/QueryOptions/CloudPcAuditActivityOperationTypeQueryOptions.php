<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcAuditActivityOperationType resources
 *
 * Available select fields:
 */
class CloudPcAuditActivityOperationTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudPcAuditActivityOperationType
     */

    /**
     * Select specific CloudPcAuditActivityOperationType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DomainDnsRecord resources
 *
 * Available select fields:
 */
class DomainDnsRecordQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DomainDnsRecord
     */

    /**
     * Select specific DomainDnsRecord properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

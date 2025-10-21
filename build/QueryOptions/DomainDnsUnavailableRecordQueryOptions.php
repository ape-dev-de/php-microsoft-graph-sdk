<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DomainDnsUnavailableRecord resources
 *
 * Available select fields:
 */
class DomainDnsUnavailableRecordQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DomainDnsUnavailableRecord
     */

    /**
     * Select specific DomainDnsUnavailableRecord properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

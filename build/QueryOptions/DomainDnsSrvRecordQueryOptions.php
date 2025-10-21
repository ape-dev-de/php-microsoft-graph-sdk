<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DomainDnsSrvRecord resources
 *
 * Available select fields:
 */
class DomainDnsSrvRecordQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DomainDnsSrvRecord
     */

    /**
     * Select specific DomainDnsSrvRecord properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

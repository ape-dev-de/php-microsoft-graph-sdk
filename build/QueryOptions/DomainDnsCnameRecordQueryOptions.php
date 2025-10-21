<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DomainDnsCnameRecord resources
 *
 * Available select fields:
 */
class DomainDnsCnameRecordQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DomainDnsCnameRecord
     */

    /**
     * Select specific DomainDnsCnameRecord properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

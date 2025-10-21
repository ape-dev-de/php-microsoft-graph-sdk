<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DomainDnsCnameRecord resources
 *
 * Available select fields:
 * - canonicalName
 */
class DomainDnsCnameRecordQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DomainDnsCnameRecord
     */
    public const FIELD_CANONICAL_NAME = 'canonicalName';

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

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
    public const FIELD_CANONICAL_NAME = 'canonicalName';

    /**
     * Select specific DomainDnsCnameRecord properties
     * 
     * @param array<string> $select Use DomainDnsCnameRecordQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

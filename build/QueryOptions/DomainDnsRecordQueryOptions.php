<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DomainDnsRecord resources
 *
 * Available select fields:
 * - isOptional
 * - label
 * - recordType
 * - supportedService
 * - ttl
 */
class DomainDnsRecordQueryOptions extends QueryOptions
{
    public const FIELD_IS_OPTIONAL = 'isOptional';
    public const FIELD_LABEL = 'label';
    public const FIELD_RECORD_TYPE = 'recordType';
    public const FIELD_SUPPORTED_SERVICE = 'supportedService';
    public const FIELD_TTL = 'ttl';

    /**
     * Select specific DomainDnsRecord properties
     * 
     * @param array<string> $select Use DomainDnsRecordQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DomainDnsRecordCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DomainDnsRecordCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DomainDnsRecordCollectionResponse properties
     * 
     * @param array<string> $select Use DomainDnsRecordCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

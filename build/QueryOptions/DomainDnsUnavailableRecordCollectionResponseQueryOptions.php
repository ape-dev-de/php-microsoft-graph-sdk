<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DomainDnsUnavailableRecordCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DomainDnsUnavailableRecordCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DomainDnsUnavailableRecordCollectionResponse properties
     * 
     * @param array<string> $select Use DomainDnsUnavailableRecordCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

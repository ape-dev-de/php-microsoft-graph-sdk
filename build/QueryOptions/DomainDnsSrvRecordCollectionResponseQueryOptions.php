<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DomainDnsSrvRecordCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DomainDnsSrvRecordCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DomainDnsSrvRecordCollectionResponse properties
     * 
     * @param array<string> $select Use DomainDnsSrvRecordCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

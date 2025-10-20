<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DomainDnsCnameRecordCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DomainDnsCnameRecordCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DomainDnsCnameRecordCollectionResponse properties
     * 
     * @param array<string> $select Use DomainDnsCnameRecordCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DomainDnsMxRecordCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DomainDnsMxRecordCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DomainDnsMxRecordCollectionResponse properties
     * 
     * @param array<string> $select Use DomainDnsMxRecordCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

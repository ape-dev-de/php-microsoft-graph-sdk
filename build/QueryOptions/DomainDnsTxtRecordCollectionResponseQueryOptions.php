<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DomainDnsTxtRecordCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DomainDnsTxtRecordCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DomainDnsTxtRecordCollectionResponse properties
     * 
     * @param array<string> $select Use DomainDnsTxtRecordCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

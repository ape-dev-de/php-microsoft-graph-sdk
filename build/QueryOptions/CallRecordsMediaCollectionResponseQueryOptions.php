<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsMediaCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CallRecordsMediaCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CallRecordsMediaCollectionResponse properties
     * 
     * @param array<string> $select Use CallRecordsMediaCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsMediaStreamCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CallRecordsMediaStreamCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CallRecordsMediaStreamCollectionResponse properties
     * 
     * @param array<string> $select Use CallRecordsMediaStreamCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

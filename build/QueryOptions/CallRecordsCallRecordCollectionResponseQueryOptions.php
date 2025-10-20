<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsCallRecordCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CallRecordsCallRecordCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CallRecordsCallRecordCollectionResponse properties
     * 
     * @param array<string> $select Use CallRecordsCallRecordCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

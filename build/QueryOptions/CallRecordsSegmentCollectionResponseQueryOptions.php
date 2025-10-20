<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsSegmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CallRecordsSegmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CallRecordsSegmentCollectionResponse properties
     * 
     * @param array<string> $select Use CallRecordsSegmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

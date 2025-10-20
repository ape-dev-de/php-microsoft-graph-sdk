<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SendDtmfTonesOperationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SendDtmfTonesOperationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SendDtmfTonesOperationCollectionResponse properties
     * 
     * @param array<string> $select Use SendDtmfTonesOperationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

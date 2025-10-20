<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MetaDataKeyStringPairCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MetaDataKeyStringPairCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MetaDataKeyStringPairCollectionResponse properties
     * 
     * @param array<string> $select Use MetaDataKeyStringPairCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

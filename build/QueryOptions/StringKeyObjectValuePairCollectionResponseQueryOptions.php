<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for StringKeyObjectValuePairCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class StringKeyObjectValuePairCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific StringKeyObjectValuePairCollectionResponse properties
     * 
     * @param array<string> $select Use StringKeyObjectValuePairCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

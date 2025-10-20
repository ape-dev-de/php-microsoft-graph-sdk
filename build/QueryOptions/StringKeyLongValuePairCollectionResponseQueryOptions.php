<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for StringKeyLongValuePairCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class StringKeyLongValuePairCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific StringKeyLongValuePairCollectionResponse properties
     * 
     * @param array<string> $select Use StringKeyLongValuePairCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

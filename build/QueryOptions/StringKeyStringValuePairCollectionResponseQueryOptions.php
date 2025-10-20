<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for StringKeyStringValuePairCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class StringKeyStringValuePairCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific StringKeyStringValuePairCollectionResponse properties
     * 
     * @param array<string> $select Use StringKeyStringValuePairCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserAttributeValuesItemCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserAttributeValuesItemCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserAttributeValuesItemCollectionResponse properties
     * 
     * @param array<string> $select Use UserAttributeValuesItemCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

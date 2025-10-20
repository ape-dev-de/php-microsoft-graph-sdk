<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AllowedValueCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AllowedValueCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AllowedValueCollectionResponse properties
     * 
     * @param array<string> $select Use AllowedValueCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

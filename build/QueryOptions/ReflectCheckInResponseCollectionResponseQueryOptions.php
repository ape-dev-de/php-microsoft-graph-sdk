<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ReflectCheckInResponseCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ReflectCheckInResponseCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ReflectCheckInResponseCollectionResponse properties
     * 
     * @param array<string> $select Use ReflectCheckInResponseCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

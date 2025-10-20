<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ShiftAvailabilityCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ShiftAvailabilityCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ShiftAvailabilityCollectionResponse properties
     * 
     * @param array<string> $select Use ShiftAvailabilityCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

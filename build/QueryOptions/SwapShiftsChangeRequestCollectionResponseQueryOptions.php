<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SwapShiftsChangeRequestCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SwapShiftsChangeRequestCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SwapShiftsChangeRequestCollectionResponse properties
     * 
     * @param array<string> $select Use SwapShiftsChangeRequestCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

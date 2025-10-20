<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimeSlotCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TimeSlotCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TimeSlotCollectionResponse properties
     * 
     * @param array<string> $select Use TimeSlotCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

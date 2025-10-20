<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimeSlot resources
 *
 * Available select fields:
 * - end
 * - start
 */
class TimeSlotQueryOptions extends QueryOptions
{
    public const FIELD_END = 'end';
    public const FIELD_START = 'start';

    /**
     * Select specific TimeSlot properties
     * 
     * @param array<string> $select Use TimeSlotQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

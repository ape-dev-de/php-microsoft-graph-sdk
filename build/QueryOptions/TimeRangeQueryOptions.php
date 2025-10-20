<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimeRange resources
 *
 * Available select fields:
 * - endTime
 * - startTime
 */
class TimeRangeQueryOptions extends QueryOptions
{
    public const FIELD_END_TIME = 'endTime';
    public const FIELD_START_TIME = 'startTime';

    /**
     * Select specific TimeRange properties
     * 
     * @param array<string> $select Use TimeRangeQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

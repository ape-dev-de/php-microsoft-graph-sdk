<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimePeriod resources
 *
 * Available select fields:
 * - endDateTime
 * - startDateTime
 */
class TimePeriodQueryOptions extends QueryOptions
{
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_START_DATE_TIME = 'startDateTime';

    /**
     * Select specific TimePeriod properties
     * 
     * @param array<string> $select Use TimePeriodQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

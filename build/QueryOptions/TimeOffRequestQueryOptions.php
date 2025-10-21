<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimeOffRequest resources
 *
 * Available select fields:
 * - endDateTime
 * - startDateTime
 * - timeOffReasonId
 */
class TimeOffRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TimeOffRequest
     */
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_TIME_OFF_REASON_ID = 'timeOffReasonId';

    /**
     * Select specific TimeOffRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

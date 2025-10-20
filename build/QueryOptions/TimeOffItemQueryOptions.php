<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimeOffItem resources
 *
 * Available select fields:
 * - timeOffReasonId
 */
class TimeOffItemQueryOptions extends QueryOptions
{
    public const FIELD_TIME_OFF_REASON_ID = 'timeOffReasonId';

    /**
     * Select specific TimeOffItem properties
     * 
     * @param array<string> $select Use TimeOffItemQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

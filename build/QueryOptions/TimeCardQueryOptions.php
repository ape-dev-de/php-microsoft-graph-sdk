<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimeCard resources
 *
 * Available select fields:
 * - breaks
 * - clockInEvent
 * - clockOutEvent
 * - confirmedBy
 * - notes
 * - originalEntry
 * - state
 * - userId
 */
class TimeCardQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TimeCard
     */
    public const FIELD_BREAKS = 'breaks';
    public const FIELD_CLOCK_IN_EVENT = 'clockInEvent';
    public const FIELD_CLOCK_OUT_EVENT = 'clockOutEvent';
    public const FIELD_CONFIRMED_BY = 'confirmedBy';
    public const FIELD_NOTES = 'notes';
    public const FIELD_ORIGINAL_ENTRY = 'originalEntry';
    public const FIELD_STATE = 'state';
    public const FIELD_USER_ID = 'userId';

    /**
     * Select specific TimeCard properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

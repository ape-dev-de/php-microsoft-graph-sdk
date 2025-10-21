<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimeCardEntry resources
 *
 * Available select fields:
 * - breaks
 * - clockInEvent
 * - clockOutEvent
 */
class TimeCardEntryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TimeCardEntry
     */
    public const FIELD_BREAKS = 'breaks';
    public const FIELD_CLOCK_IN_EVENT = 'clockInEvent';
    public const FIELD_CLOCK_OUT_EVENT = 'clockOutEvent';

    /**
     * Select specific TimeCardEntry properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

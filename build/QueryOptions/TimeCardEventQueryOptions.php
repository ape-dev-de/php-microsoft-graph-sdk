<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimeCardEvent resources
 *
 * Available select fields:
 * - dateTime
 * - isAtApprovedLocation
 * - notes
 */
class TimeCardEventQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TimeCardEvent
     */
    public const FIELD_DATE_TIME = 'dateTime';
    public const FIELD_IS_AT_APPROVED_LOCATION = 'isAtApprovedLocation';
    public const FIELD_NOTES = 'notes';

    /**
     * Select specific TimeCardEvent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

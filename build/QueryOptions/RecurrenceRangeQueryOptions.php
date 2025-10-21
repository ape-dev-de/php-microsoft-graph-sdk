<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RecurrenceRange resources
 *
 * Available select fields:
 * - endDate
 * - numberOfOccurrences
 * - recurrenceTimeZone
 * - startDate
 * - type
 */
class RecurrenceRangeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RecurrenceRange
     */
    public const FIELD_END_DATE = 'endDate';
    public const FIELD_NUMBER_OF_OCCURRENCES = 'numberOfOccurrences';
    public const FIELD_RECURRENCE_TIME_ZONE = 'recurrenceTimeZone';
    public const FIELD_START_DATE = 'startDate';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific RecurrenceRange properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

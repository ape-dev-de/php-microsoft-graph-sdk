<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RecurrencePattern resources
 *
 * Available select fields:
 * - dayOfMonth
 * - daysOfWeek
 * - firstDayOfWeek
 * - index
 * - interval
 * - month
 * - type
 */
class RecurrencePatternQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RecurrencePattern
     */
    public const FIELD_DAY_OF_MONTH = 'dayOfMonth';
    public const FIELD_DAYS_OF_WEEK = 'daysOfWeek';
    public const FIELD_FIRST_DAY_OF_WEEK = 'firstDayOfWeek';
    public const FIELD_INDEX = 'index';
    public const FIELD_INTERVAL = 'interval';
    public const FIELD_MONTH = 'month';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific RecurrencePattern properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

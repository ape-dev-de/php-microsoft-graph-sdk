<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for StandardTimeZoneOffset resources
 *
 * Available select fields:
 * - dayOccurrence
 * - dayOfWeek
 * - month
 * - time
 * - year
 */
class StandardTimeZoneOffsetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for StandardTimeZoneOffset
     */
    public const FIELD_DAY_OCCURRENCE = 'dayOccurrence';
    public const FIELD_DAY_OF_WEEK = 'dayOfWeek';
    public const FIELD_MONTH = 'month';
    public const FIELD_TIME = 'time';
    public const FIELD_YEAR = 'year';

    /**
     * Select specific StandardTimeZoneOffset properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

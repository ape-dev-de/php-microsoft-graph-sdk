<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DateTimeTimeZone resources
 *
 * Available select fields:
 * - dateTime
 * - timeZone
 */
class DateTimeTimeZoneQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DateTimeTimeZone
     */
    public const FIELD_DATE_TIME = 'dateTime';
    public const FIELD_TIME_ZONE = 'timeZone';

    /**
     * Select specific DateTimeTimeZone properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

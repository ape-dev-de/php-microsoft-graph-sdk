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
    public const FIELD_DATE_TIME = 'dateTime';
    public const FIELD_TIME_ZONE = 'timeZone';

    /**
     * Select specific DateTimeTimeZone properties
     * 
     * @param array<string> $select Use DateTimeTimeZoneQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

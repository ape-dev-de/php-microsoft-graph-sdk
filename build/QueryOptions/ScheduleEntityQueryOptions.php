<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ScheduleEntity resources
 *
 * Available select fields:
 * - endDateTime
 * - startDateTime
 * - theme
 */
class ScheduleEntityQueryOptions extends QueryOptions
{
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_THEME = 'theme';

    /**
     * Select specific ScheduleEntity properties
     * 
     * @param array<string> $select Use ScheduleEntityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

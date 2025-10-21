<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CalendarGroup resources
 *
 * Available select fields:
 * - changeKey
 * - classId
 * - name
 * - calendars
 */
class CalendarGroupQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CalendarGroup
     */
    public const FIELD_CHANGE_KEY = 'changeKey';
    public const FIELD_CLASS_ID = 'classId';
    public const FIELD_NAME = 'name';
    public const FIELD_CALENDARS = 'calendars';

    /**
     * Select specific CalendarGroup properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

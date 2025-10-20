<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamworkOnlineMeetingInfo resources
 *
 * Available select fields:
 * - calendarEventId
 * - joinWebUrl
 * - organizer
 */
class TeamworkOnlineMeetingInfoQueryOptions extends QueryOptions
{
    public const FIELD_CALENDAR_EVENT_ID = 'calendarEventId';
    public const FIELD_JOIN_WEB_URL = 'joinWebUrl';
    public const FIELD_ORGANIZER = 'organizer';

    /**
     * Select specific TeamworkOnlineMeetingInfo properties
     * 
     * @param array<string> $select Use TeamworkOnlineMeetingInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

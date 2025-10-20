<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MeetingParticipants resources
 *
 * Available select fields:
 * - attendees
 * - organizer
 */
class MeetingParticipantsQueryOptions extends QueryOptions
{
    public const FIELD_ATTENDEES = 'attendees';
    public const FIELD_ORGANIZER = 'organizer';

    /**
     * Select specific MeetingParticipants properties
     * 
     * @param array<string> $select Use MeetingParticipantsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

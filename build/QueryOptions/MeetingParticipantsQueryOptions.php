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
    /**
     * Available select fields for MeetingParticipants
     */
    public const FIELD_ATTENDEES = 'attendees';
    public const FIELD_ORGANIZER = 'organizer';

    /**
     * Select specific MeetingParticipants properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

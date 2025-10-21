<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MeetingTimeSuggestion resources
 *
 * Available select fields:
 * - attendeeAvailability
 * - confidence
 * - locations
 * - meetingTimeSlot
 * - order
 * - organizerAvailability
 * - suggestionReason
 */
class MeetingTimeSuggestionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MeetingTimeSuggestion
     */
    public const FIELD_ATTENDEE_AVAILABILITY = 'attendeeAvailability';
    public const FIELD_CONFIDENCE = 'confidence';
    public const FIELD_LOCATIONS = 'locations';
    public const FIELD_MEETING_TIME_SLOT = 'meetingTimeSlot';
    public const FIELD_ORDER = 'order';
    public const FIELD_ORGANIZER_AVAILABILITY = 'organizerAvailability';
    public const FIELD_SUGGESTION_REASON = 'suggestionReason';

    /**
     * Select specific MeetingTimeSuggestion properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

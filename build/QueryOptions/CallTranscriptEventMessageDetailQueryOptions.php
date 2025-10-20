<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallTranscriptEventMessageDetail resources
 *
 * Available select fields:
 * - callId
 * - callTranscriptICalUid
 * - meetingOrganizer
 */
class CallTranscriptEventMessageDetailQueryOptions extends QueryOptions
{
    public const FIELD_CALL_ID = 'callId';
    public const FIELD_CALL_TRANSCRIPT_ICAL_UID = 'callTranscriptICalUid';
    public const FIELD_MEETING_ORGANIZER = 'meetingOrganizer';

    /**
     * Select specific CallTranscriptEventMessageDetail properties
     * 
     * @param array<string> $select Use CallTranscriptEventMessageDetailQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

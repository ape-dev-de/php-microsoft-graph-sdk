<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnlineMeeting resources
 *
 * Available select fields:
 * - attendeeReport
 * - broadcastSettings
 * - creationDateTime
 * - endDateTime
 * - externalId
 * - isBroadcast
 * - meetingTemplateId
 * - participants
 * - startDateTime
 * - recordings
 * - transcripts
 */
class OnlineMeetingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnlineMeeting
     */
    public const FIELD_ATTENDEE_REPORT = 'attendeeReport';
    public const FIELD_BROADCAST_SETTINGS = 'broadcastSettings';
    public const FIELD_CREATION_DATE_TIME = 'creationDateTime';
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_IS_BROADCAST = 'isBroadcast';
    public const FIELD_MEETING_TEMPLATE_ID = 'meetingTemplateId';
    public const FIELD_PARTICIPANTS = 'participants';
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_RECORDINGS = 'recordings';
    public const FIELD_TRANSCRIPTS = 'transcripts';

    /**
     * Select specific OnlineMeeting properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

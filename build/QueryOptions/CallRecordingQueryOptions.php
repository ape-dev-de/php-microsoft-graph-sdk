<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecording resources
 *
 * Available select fields:
 * - callId
 * - content
 * - contentCorrelationId
 * - createdDateTime
 * - endDateTime
 * - meetingId
 * - meetingOrganizer
 * - recordingContentUrl
 */
class CallRecordingQueryOptions extends QueryOptions
{
    public const FIELD_CALL_ID = 'callId';
    public const FIELD_CONTENT = 'content';
    public const FIELD_CONTENT_CORRELATION_ID = 'contentCorrelationId';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_MEETING_ID = 'meetingId';
    public const FIELD_MEETING_ORGANIZER = 'meetingOrganizer';
    public const FIELD_RECORDING_CONTENT_URL = 'recordingContentUrl';

    /**
     * Select specific CallRecording properties
     * 
     * @param array<string> $select Use CallRecordingQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

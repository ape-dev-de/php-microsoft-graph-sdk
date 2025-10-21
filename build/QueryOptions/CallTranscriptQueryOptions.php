<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallTranscript resources
 *
 * Available select fields:
 * - callId
 * - content
 * - contentCorrelationId
 * - createdDateTime
 * - endDateTime
 * - meetingId
 * - meetingOrganizer
 * - metadataContent
 * - transcriptContentUrl
 */
class CallTranscriptQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallTranscript
     */
    public const FIELD_CALL_ID = 'callId';
    public const FIELD_CONTENT = 'content';
    public const FIELD_CONTENT_CORRELATION_ID = 'contentCorrelationId';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_MEETING_ID = 'meetingId';
    public const FIELD_MEETING_ORGANIZER = 'meetingOrganizer';
    public const FIELD_METADATA_CONTENT = 'metadataContent';
    public const FIELD_TRANSCRIPT_CONTENT_URL = 'transcriptContentUrl';

    /**
     * Select specific CallTranscript properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

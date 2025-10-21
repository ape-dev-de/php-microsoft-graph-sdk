<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallTranscript
 */
class CallTranscript
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The unique identifier for the call that is related to this transcript. Read-only. */
        public ?string $callId = null,
        /** The content of the transcript. Read-only. */
        public ?string $content = null,
        /** The unique identifier that links the transcript with its corresponding recording. Read-only. */
        public ?string $contentCorrelationId = null,
        /** Date and time at which the transcript was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Date and time at which the transcription ends. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $endDateTime = null,
        /** The unique identifier of the online meeting related to this transcript. Read-only. */
        public ?string $meetingId = null,
        /** The identity information of the organizer of the onlineMeeting related to this transcript. Read-only. */
        public ?IdentitySet $meetingOrganizer = null,
        /** The time-aligned metadata of the utterances in the transcript. Read-only. */
        public ?string $metadataContent = null,
        /** The URL that can be used to access the content of the transcript. Read-only. */
        public ?string $transcriptContentUrl = null
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecording
 */
class CallRecording
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The unique identifier for the call that is related to this recording. Read-only. */
    public ?string $callId = null;

    /** The content of the recording. Read-only. */
    public ?string $content = null;

    /** The unique identifier that links the transcript with its corresponding recording. Read-only. */
    public ?string $contentCorrelationId = null;

    /** Date and time at which the recording was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Date and time at which the recording ends. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $endDateTime = null;

    /** The unique identifier of the onlineMeeting related to this recording. Read-only. */
    public ?string $meetingId = null;

    /** 
     * The identity information of the organizer of the onlineMeeting related to this recording. Read-only.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $meetingOrganizer = null;

    /** The URL that can be used to access the content of the recording. Read-only. */
    public ?string $recordingContentUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['callId'])) {
            $this->callId = $data['callId'];
        }
        if (isset($data['content'])) {
            $this->content = $data['content'];
        }
        if (isset($data['contentCorrelationId'])) {
            $this->contentCorrelationId = $data['contentCorrelationId'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['endDateTime'])) {
            $this->endDateTime = $data['endDateTime'];
        }
        if (isset($data['meetingId'])) {
            $this->meetingId = $data['meetingId'];
        }
        if (isset($data['meetingOrganizer'])) {
            $this->meetingOrganizer = $data['meetingOrganizer'];
        }
        if (isset($data['recordingContentUrl'])) {
            $this->recordingContentUrl = $data['recordingContentUrl'];
        }
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsSession
 */
class CallRecordsSession
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Endpoint that answered the session.
     * @var CallRecordsEndpoint|\stdClass|null
     */
    public mixed $callee = null;

    /** 
     * Endpoint that initiated the session.
     * @var CallRecordsEndpoint|\stdClass|null
     */
    public mixed $caller = null;

    /** UTC time when the last user left the session. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $endDateTime = null;

    /** 
     * Failure information associated with the session if the session failed.
     * @var CallRecordsFailureInfo|\stdClass|null
     */
    public mixed $failureInfo = null;

    /** Specifies whether the session is a test. */
    public ?bool $isTest = null;

    /** 
     * List of modalities present in the session. Possible values are: unknown, audio, video, videoBasedScreenSharing, data, screenSharing, unknownFutureValue.
     * @var CallRecordsModality[]
     */
    public array $modalities = [];

    /** UTC time when the first user joined the session. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $startDateTime = null;

    /** 
     * The list of segments involved in the session. Read-only. Nullable.
     * @var CallRecordsSegment[]
     */
    public array $segments = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['callee'])) {
            $this->callee = is_array($data['callee']) ? new CallRecordsEndpoint($data['callee']) : $data['callee'];
        }
        if (isset($data['caller'])) {
            $this->caller = is_array($data['caller']) ? new CallRecordsEndpoint($data['caller']) : $data['caller'];
        }
        if (isset($data['endDateTime'])) {
            $this->endDateTime = is_string($data['endDateTime']) ? new \DateTimeImmutable($data['endDateTime']) : $data['endDateTime'];
        }
        if (isset($data['failureInfo'])) {
            $this->failureInfo = is_array($data['failureInfo']) ? new CallRecordsFailureInfo($data['failureInfo']) : $data['failureInfo'];
        }
        if (isset($data['isTest'])) {
            $this->isTest = $data['isTest'];
        }
        if (isset($data['modalities'])) {
            $this->modalities = $data['modalities'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_string($data['startDateTime']) ? new \DateTimeImmutable($data['startDateTime']) : $data['startDateTime'];
        }
        if (isset($data['segments'])) {
            $this->segments = $data['segments'];
        }
    }
}

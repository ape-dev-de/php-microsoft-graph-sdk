<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsSegment
 */
class CallRecordsSegment
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Endpoint that answered this segment.
     * @var CallRecordsEndpoint|\stdClass|null
     */
    public mixed $callee = null;

    /** 
     * Endpoint that initiated this segment.
     * @var CallRecordsEndpoint|\stdClass|null
     */
    public mixed $caller = null;

    /** UTC time when the segment ended. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $endDateTime = null;

    /** 
     * Failure information associated with the segment if it failed.
     * @var CallRecordsFailureInfo|\stdClass|null
     */
    public mixed $failureInfo = null;

    /** 
     * Media associated with this segment.
     * @var CallRecordsMedia[]
     */
    public array $media = [];

    /** UTC time when the segment started. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $startDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
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
        if (isset($data['media'])) {
            $this->media = $data['media'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_string($data['startDateTime']) ? new \DateTimeImmutable($data['startDateTime']) : $data['startDateTime'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}

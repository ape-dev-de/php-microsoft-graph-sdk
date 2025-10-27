<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LongRunningOperation
 */
class LongRunningOperation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The start time of the operation. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The time of the last action in the operation. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastActionDateTime = null;

    /** URI of the resource that the operation is performed on. */
    public ?string $resourceLocation = null;

    /** 
     * The status of the operation. The possible values are: notStarted, running, succeeded, failed, unknownFutureValue.
     * @var LongRunningOperationStatus|\stdClass|null
     */
    public LongRunningOperationStatus|\stdClass|null $status = null;

    /** Details about the status of the operation. */
    public ?string $statusDetail = null;


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
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['lastActionDateTime'])) {
            $this->lastActionDateTime = is_string($data['lastActionDateTime']) ? new \DateTimeImmutable($data['lastActionDateTime']) : $data['lastActionDateTime'];
        }
        if (isset($data['resourceLocation'])) {
            $this->resourceLocation = $data['resourceLocation'];
        }
        if (isset($data['status'])) {
            $this->status = is_string($data['status']) ? LongRunningOperationStatus::tryFrom($data['status']) : $data['status'];
        }
        if (isset($data['statusDetail'])) {
            $this->statusDetail = $data['statusDetail'];
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

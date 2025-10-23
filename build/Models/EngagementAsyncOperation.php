<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EngagementAsyncOperation
 */
class EngagementAsyncOperation
{
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
    public mixed $status = null;

    /** Details about the status of the operation. */
    public ?string $statusDetail = null;

    /** 
     * The type of the long-running operation. The possible values are: createCommunity, unknownFutureValue.
     * @var EngagementAsyncOperationType|\stdClass|null
     */
    public mixed $operationType = null;

    /** The ID of the object created or modified as a result of this async operation. */
    public ?string $resourceId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
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
            $this->status = $data['status'];
        }
        if (isset($data['statusDetail'])) {
            $this->statusDetail = $data['statusDetail'];
        }
        if (isset($data['operationType'])) {
            $this->operationType = $data['operationType'];
        }
        if (isset($data['resourceId'])) {
            $this->resourceId = $data['resourceId'];
        }
    }
}

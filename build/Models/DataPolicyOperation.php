<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DataPolicyOperation
 */
class DataPolicyOperation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Represents when the request for this data policy operation was completed, in UTC time, using the ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Null until the operation completes. */
    public ?\DateTimeInterface $completedDateTime = null;

    /** 
     * Specifies the progress of an operation.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $progress = null;

    /** 
     * Possible values are: notStarted, running, complete, failed, unknownFutureValue.
     * @var DataPolicyOperationStatus|\stdClass|null
     */
    public DataPolicyOperationStatus|\stdClass|null $status = null;

    /** The URL location to where data is being exported for export requests. */
    public ?string $storageLocation = null;

    /** Represents when the request for this data operation was submitted, in UTC time, using the ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $submittedDateTime = null;

    /** The id for the user on whom the operation is performed. */
    public ?string $userId = null;


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
        if (isset($data['completedDateTime'])) {
            $this->completedDateTime = is_string($data['completedDateTime']) ? new \DateTimeImmutable($data['completedDateTime']) : $data['completedDateTime'];
        }
        if (isset($data['progress'])) {
            $this->progress = $data['progress'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new DataPolicyOperationStatus($data['status']) : $data['status'];
        }
        if (isset($data['storageLocation'])) {
            $this->storageLocation = $data['storageLocation'];
        }
        if (isset($data['submittedDateTime'])) {
            $this->submittedDateTime = is_string($data['submittedDateTime']) ? new \DateTimeImmutable($data['submittedDateTime']) : $data['submittedDateTime'];
        }
        if (isset($data['userId'])) {
            $this->userId = $data['userId'];
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

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenoteOperation
 */
class OnenoteOperation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The start time of the operation. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The time of the last action of the operation. */
    public ?\DateTimeInterface $lastActionDateTime = null;

    /** 
     * The current status of the operation: notStarted, running, completed, failed
     * @var OperationStatus|\stdClass|null
     */
    public mixed $status = null;

    /** 
     * The error returned by the operation.
     * @var OnenoteOperationError|\stdClass|null
     */
    public mixed $error = null;

    /** The operation percent complete if the operation is still in running status. */
    public ?string $percentComplete = null;

    /** The resource id. */
    public ?string $resourceId = null;

    /** The resource URI for the object. For example, the resource URI for a copied page or section. */
    public ?string $resourceLocation = null;


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
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new OperationStatus($data['status']) : $data['status'];
        }
        if (isset($data['error'])) {
            $this->error = is_array($data['error']) ? new OnenoteOperationError($data['error']) : $data['error'];
        }
        if (isset($data['percentComplete'])) {
            $this->percentComplete = $data['percentComplete'];
        }
        if (isset($data['resourceId'])) {
            $this->resourceId = $data['resourceId'];
        }
        if (isset($data['resourceLocation'])) {
            $this->resourceLocation = $data['resourceLocation'];
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

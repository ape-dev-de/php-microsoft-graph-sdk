<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAsyncOperation
 */
class TeamsAsyncOperation
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Number of times the operation was attempted before being marked successful or failed. */
    public ?float $attemptsCount = null;

    /** Time when the operation was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Any error that causes the async operation to fail.
     * @var OperationError|\stdClass|null
     */
    public mixed $error = null;

    /** Time when the async operation was last updated. */
    public ?\DateTimeInterface $lastActionDateTime = null;

    /**  */
    public ?TeamsAsyncOperationType $operationType = null;

    /**  */
    public ?TeamsAsyncOperationStatus $status = null;

    /** The ID of the object that's created or modified as result of this async operation, typically a team. */
    public ?string $targetResourceId = null;

    /** The location of the object that's created or modified as result of this async operation. This URL should be treated as an opaque value and not parsed into its component paths. */
    public ?string $targetResourceLocation = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['attemptsCount'])) {
            $this->attemptsCount = $data['attemptsCount'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['error'])) {
            $this->error = $data['error'];
        }
        if (isset($data['lastActionDateTime'])) {
            $this->lastActionDateTime = $data['lastActionDateTime'];
        }
        if (isset($data['operationType'])) {
            $this->operationType = $data['operationType'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['targetResourceId'])) {
            $this->targetResourceId = $data['targetResourceId'];
        }
        if (isset($data['targetResourceLocation'])) {
            $this->targetResourceLocation = $data['targetResourceLocation'];
        }
    }
}

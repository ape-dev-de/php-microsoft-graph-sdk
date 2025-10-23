<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminRelationshipOperation
 */
class DelegatedAdminRelationshipOperation
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The time in ISO 8601 format and in UTC time when the long-running operation was created. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The data (payload) for the operation. Read-only. */
    public ?string $data = null;

    /** The time in ISO 8601 format and in UTC time when the long-running operation was last modified. Read-only. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /**  */
    public ?DelegatedAdminRelationshipOperationType $operationType = null;

    /**  */
    public ?LongRunningOperationStatus $status = null;


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
        if (isset($data['data'])) {
            $this->data = $data['data'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['operationType'])) {
            $this->operationType = $data['operationType'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
    }
}

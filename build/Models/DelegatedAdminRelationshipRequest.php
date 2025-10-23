<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminRelationshipRequest
 */
class DelegatedAdminRelationshipRequest
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?DelegatedAdminRelationshipRequestAction $action = null;

    /** The date and time in ISO 8601 format and in UTC time when the relationship request was created. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The date and time in ISO 8601 format and UTC time when this relationship request was last modified. Read-only. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * The status of the request. Read-only. The possible values are: created, pending, succeeded, failed, unknownFutureValue.
     * @var DelegatedAdminRelationshipRequestStatus|\stdClass|null
     */
    public mixed $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['action'])) {
            $this->action = $data['action'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
    }
}

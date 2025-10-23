<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminRelationship
 */
class DelegatedAdminRelationship
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?DelegatedAdminAccessDetails $accessDetails = null;

    /** The date and time in ISO 8601 format and in UTC time when the relationship became active. Read-only. */
    public ?\DateTimeInterface $activatedDateTime = null;

    /** The duration by which the validity of the relationship is automatically extended, denoted in ISO 8601 format. Supported values are: P0D, PT0S, P180D. The default value is PT0S. PT0S indicates that the relationship expires when the endDateTime is reached and it isn't automatically extended. */
    public ?string $autoExtendDuration = null;

    /** The date and time in ISO 8601 format and in UTC time when the relationship was created. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * The display name and unique identifier of the customer of the relationship. This is configured either by the partner at the time the relationship is created or by the system after the customer approves the relationship. Can't be changed by the customer.
     * @var DelegatedAdminRelationshipCustomerParticipant|\stdClass|null
     */
    public mixed $customer = null;

    /** The display name of the relationship used for ease of identification. Must be unique across all delegated admin relationships of the partner and is set by the partner only when the relationship is in the created status and can't be changed by the customer. Maximum length is 50 characters. */
    public ?string $displayName = null;

    /** The duration of the relationship in ISO 8601 format. Must be a value between P1D and P2Y inclusive. This is set by the partner only when the relationship is in the created status and can't be changed by the customer. */
    public ?string $duration = null;

    /** The date and time in ISO 8601 format and in UTC time when the status of relationship changes to either terminated or expired. Calculated as endDateTime = activatedDateTime + duration. Read-only. */
    public ?\DateTimeInterface $endDateTime = null;

    /** The date and time in ISO 8601 format and in UTC time when the relationship was last modified. Read-only. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * The status of the relationship. Read Only. The possible values are: activating, active, approvalPending, approved, created, expired, expiring, terminated, terminating, terminationRequested, unknownFutureValue. Supports $orderby.
     * @var DelegatedAdminRelationshipStatus|\stdClass|null
     */
    public mixed $status = null;

    /** 
     * The access assignments associated with the delegated admin relationship.
     * @var DelegatedAdminAccessAssignment[]
     */
    public array $accessAssignments = [];

    /** 
     * The long running operations associated with the delegated admin relationship.
     * @var DelegatedAdminRelationshipOperation[]
     */
    public array $operations = [];

    /** 
     * The requests associated with the delegated admin relationship.
     * @var DelegatedAdminRelationshipRequest[]
     */
    public array $requests = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['accessDetails'])) {
            $this->accessDetails = is_array($data['accessDetails']) ? new DelegatedAdminAccessDetails($data['accessDetails']) : $data['accessDetails'];
        }
        if (isset($data['activatedDateTime'])) {
            $this->activatedDateTime = is_string($data['activatedDateTime']) ? new \DateTimeImmutable($data['activatedDateTime']) : $data['activatedDateTime'];
        }
        if (isset($data['autoExtendDuration'])) {
            $this->autoExtendDuration = $data['autoExtendDuration'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['customer'])) {
            $this->customer = is_array($data['customer']) ? new DelegatedAdminRelationshipCustomerParticipant($data['customer']) : $data['customer'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['duration'])) {
            $this->duration = $data['duration'];
        }
        if (isset($data['endDateTime'])) {
            $this->endDateTime = is_string($data['endDateTime']) ? new \DateTimeImmutable($data['endDateTime']) : $data['endDateTime'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new DelegatedAdminRelationshipStatus($data['status']) : $data['status'];
        }
        if (isset($data['accessAssignments'])) {
            $this->accessAssignments = $data['accessAssignments'];
        }
        if (isset($data['operations'])) {
            $this->operations = $data['operations'];
        }
        if (isset($data['requests'])) {
            $this->requests = $data['requests'];
        }
    }
}

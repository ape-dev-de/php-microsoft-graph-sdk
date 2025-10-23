<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Request
 */
class Request
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The identifier of the approval of the request. */
    public ?string $approvalId = null;

    /** The request completion date time. */
    public ?\DateTimeInterface $completedDateTime = null;

    /** 
     * The principal that created the request.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** The request creation date time. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Free text field to define any custom data for the request. Not used. */
    public ?string $customData = null;

    /** The status of the request. Not nullable. The possible values are: Canceled, Denied, Failed, Granted, PendingAdminDecision, PendingApproval, PendingProvisioning, PendingScheduleCreation, Provisioned, Revoked, and ScheduleCreated. Not nullable. */
    public ?string $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['approvalId'])) {
            $this->approvalId = $data['approvalId'];
        }
        if (isset($data['completedDateTime'])) {
            $this->completedDateTime = is_string($data['completedDateTime']) ? new \DateTimeImmutable($data['completedDateTime']) : $data['completedDateTime'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['customData'])) {
            $this->customData = $data['customData'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
    }
}

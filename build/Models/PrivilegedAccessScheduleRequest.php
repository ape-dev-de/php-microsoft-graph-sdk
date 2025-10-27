<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessScheduleRequest
 */
class PrivilegedAccessScheduleRequest
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
     * Represents the type of operation on the group membership or ownership assignment request. The possible values are: adminAssign, adminUpdate, adminRemove, selfActivate, selfDeactivate, adminExtend, adminRenew. adminAssign: For administrators to assign group membership or ownership to principals.adminRemove: For administrators to remove principals from group membership or ownership. adminUpdate: For administrators to change existing group membership or ownership assignments.adminExtend: For administrators to extend expiring assignments.adminRenew: For administrators to renew expired assignments.selfActivate: For principals to activate their assignments.selfDeactivate: For principals to deactivate their active assignments.
     * @var ScheduleRequestActions|\stdClass|null
     */
    public mixed $action = null;

    /** Determines whether the call is a validation or an actual call. Only set this property if you want to check whether an activation is subject to additional rules like MFA before actually submitting the request. */
    public ?bool $isValidationOnly = null;

    /** A message provided by users and administrators when create they create the privilegedAccessGroupAssignmentScheduleRequest object. */
    public ?string $justification = null;

    /** 
     * The period of the group membership or ownership assignment. Recurring schedules are currently unsupported.
     * @var RequestSchedule|\stdClass|null
     */
    public mixed $scheduleInfo = null;

    /** 
     * Ticket details linked to the group membership or ownership assignment request including details of the ticket number and ticket system.
     * @var TicketInfo|\stdClass|null
     */
    public mixed $ticketInfo = null;


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
        if (isset($data['approvalId'])) {
            $this->approvalId = $data['approvalId'];
        }
        if (isset($data['completedDateTime'])) {
            $this->completedDateTime = is_string($data['completedDateTime']) ? new \DateTimeImmutable($data['completedDateTime']) : $data['completedDateTime'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new IdentitySet($data['createdBy']) : $data['createdBy'];
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
        if (isset($data['action'])) {
            $this->action = is_array($data['action']) ? new ScheduleRequestActions($data['action']) : $data['action'];
        }
        if (isset($data['isValidationOnly'])) {
            $this->isValidationOnly = $data['isValidationOnly'];
        }
        if (isset($data['justification'])) {
            $this->justification = $data['justification'];
        }
        if (isset($data['scheduleInfo'])) {
            $this->scheduleInfo = is_array($data['scheduleInfo']) ? new RequestSchedule($data['scheduleInfo']) : $data['scheduleInfo'];
        }
        if (isset($data['ticketInfo'])) {
            $this->ticketInfo = is_array($data['ticketInfo']) ? new TicketInfo($data['ticketInfo']) : $data['ticketInfo'];
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

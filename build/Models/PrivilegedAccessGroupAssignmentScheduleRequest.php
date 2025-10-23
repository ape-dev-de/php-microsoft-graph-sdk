<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessGroupAssignmentScheduleRequest
 */
class PrivilegedAccessGroupAssignmentScheduleRequest
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
     * The identifier of a membership or ownership assignment relationship to the group. Required. The possible values are: owner, member, unknownFutureValue.
     * @var PrivilegedAccessGroupRelationships|\stdClass|null
     */
    public mixed $accessId = null;

    /** The identifier of the group representing the scope of the membership or ownership assignment through PIM for Groups. Required. */
    public ?string $groupId = null;

    /** The identifier of the principal whose membership or ownership assignment to the group is managed through PIM for Groups. Supports $filter (eq, ne). */
    public ?string $principalId = null;

    /** The identifier of the schedule that's created from the membership or ownership assignment request. Supports $filter (eq, ne). */
    public ?string $targetScheduleId = null;

    /** 
     * When the request activates a membership or ownership assignment in PIM for Groups, this object represents the eligibility policy for the group. Otherwise, it is null. Supports $expand.
     * @var PrivilegedAccessGroupEligibilitySchedule|\stdClass|null
     */
    public mixed $activatedUsing = null;

    /** 
     * References the group that is the scope of the membership or ownership assignment request through PIM for Groups. Supports $expand and $select nested in $expand for select properties like id, displayName, and mail.
     * @var Group|\stdClass|null
     */
    public mixed $group = null;

    /** 
     * References the principal that's in the scope of this membership or ownership assignment request through the group that's governed by PIM. Supports $expand and $select nested in $expand for id only.
     * @var DirectoryObject|\stdClass|null
     */
    public mixed $principal = null;

    /** 
     * Schedule created by this request. Supports $expand.
     * @var PrivilegedAccessGroupEligibilitySchedule|\stdClass|null
     */
    public mixed $targetSchedule = null;


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
        if (isset($data['accessId'])) {
            $this->accessId = is_array($data['accessId']) ? new PrivilegedAccessGroupRelationships($data['accessId']) : $data['accessId'];
        }
        if (isset($data['groupId'])) {
            $this->groupId = $data['groupId'];
        }
        if (isset($data['principalId'])) {
            $this->principalId = $data['principalId'];
        }
        if (isset($data['targetScheduleId'])) {
            $this->targetScheduleId = $data['targetScheduleId'];
        }
        if (isset($data['activatedUsing'])) {
            $this->activatedUsing = is_array($data['activatedUsing']) ? new PrivilegedAccessGroupEligibilitySchedule($data['activatedUsing']) : $data['activatedUsing'];
        }
        if (isset($data['group'])) {
            $this->group = is_array($data['group']) ? new Group($data['group']) : $data['group'];
        }
        if (isset($data['principal'])) {
            $this->principal = is_array($data['principal']) ? new DirectoryObject($data['principal']) : $data['principal'];
        }
        if (isset($data['targetSchedule'])) {
            $this->targetSchedule = is_array($data['targetSchedule']) ? new PrivilegedAccessGroupEligibilitySchedule($data['targetSchedule']) : $data['targetSchedule'];
        }
    }
}

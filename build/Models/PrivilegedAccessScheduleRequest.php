<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessScheduleRequest
 */
class PrivilegedAccessScheduleRequest
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The identifier of the approval of the request. */
        public ?string $approvalId = null,
        /** The request completion date time. */
        public ?\DateTimeInterface $completedDateTime = null,
        /** The principal that created the request. */
        public ?IdentitySet $createdBy = null,
        /** The request creation date time. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Free text field to define any custom data for the request. Not used. */
        public ?string $customData = null,
        /** The status of the request. Not nullable. The possible values are: Canceled, Denied, Failed, Granted, PendingAdminDecision, PendingApproval, PendingProvisioning, PendingScheduleCreation, Provisioned, Revoked, and ScheduleCreated. Not nullable. */
        public ?string $status = null,
        /** Represents the type of operation on the group membership or ownership assignment request. The possible values are: adminAssign, adminUpdate, adminRemove, selfActivate, selfDeactivate, adminExtend, adminRenew. adminAssign: For administrators to assign group membership or ownership to principals.adminRemove: For administrators to remove principals from group membership or ownership. adminUpdate: For administrators to change existing group membership or ownership assignments.adminExtend: For administrators to extend expiring assignments.adminRenew: For administrators to renew expired assignments.selfActivate: For principals to activate their assignments.selfDeactivate: For principals to deactivate their active assignments. */
        public ?ScheduleRequestActions $action = null,
        /** Determines whether the call is a validation or an actual call. Only set this property if you want to check whether an activation is subject to additional rules like MFA before actually submitting the request. */
        public ?bool $isValidationOnly = null,
        /** A message provided by users and administrators when create they create the privilegedAccessGroupAssignmentScheduleRequest object. */
        public ?string $justification = null,
        /** The period of the group membership or ownership assignment. Recurring schedules are currently unsupported. */
        public ?RequestSchedule $scheduleInfo = null,
        /** Ticket details linked to the group membership or ownership assignment request including details of the ticket number and ticket system. */
        public ?TicketInfo $ticketInfo = null
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessGroupAssignmentScheduleRequest
 */
class PrivilegedAccessGroupAssignmentScheduleRequest
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The identifier of the approval of the request. */
        public ?string $approvalId = null,
        /** The request completion date time. */
        public ?\DateTimeInterface $completedDateTime = null,
        /** The principal that created the request. */
        public ?string $createdBy = null,
        /** The request creation date time. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Free text field to define any custom data for the request. Not used. */
        public ?string $customData = null,
        /** The status of the request. Not nullable. The possible values are: Canceled, Denied, Failed, Granted, PendingAdminDecision, PendingApproval, PendingProvisioning, PendingScheduleCreation, Provisioned, Revoked, and ScheduleCreated. Not nullable. */
        public ?string $status = null,
        /** Represents the type of operation on the group membership or ownership assignment request. The possible values are: adminAssign, adminUpdate, adminRemove, selfActivate, selfDeactivate, adminExtend, adminRenew. adminAssign: For administrators to assign group membership or ownership to principals.adminRemove: For administrators to remove principals from group membership or ownership. adminUpdate: For administrators to change existing group membership or ownership assignments.adminExtend: For administrators to extend expiring assignments.adminRenew: For administrators to renew expired assignments.selfActivate: For principals to activate their assignments.selfDeactivate: For principals to deactivate their active assignments. */
        public ?string $action = null,
        /** Determines whether the call is a validation or an actual call. Only set this property if you want to check whether an activation is subject to additional rules like MFA before actually submitting the request. */
        public ?bool $isValidationOnly = null,
        /** A message provided by users and administrators when create they create the privilegedAccessGroupAssignmentScheduleRequest object. */
        public ?string $justification = null,
        /** The period of the group membership or ownership assignment. Recurring schedules are currently unsupported. */
        public ?string $scheduleInfo = null,
        /** Ticket details linked to the group membership or ownership assignment request including details of the ticket number and ticket system. */
        public ?string $ticketInfo = null,
        /** The identifier of a membership or ownership assignment relationship to the group. Required. The possible values are: owner, member, unknownFutureValue. */
        public ?string $accessId = null,
        /** The identifier of the group representing the scope of the membership or ownership assignment through PIM for Groups. Required. */
        public ?string $groupId = null,
        /** The identifier of the principal whose membership or ownership assignment to the group is managed through PIM for Groups. Supports $filter (eq, ne). */
        public ?string $principalId = null,
        /** The identifier of the schedule that's created from the membership or ownership assignment request. Supports $filter (eq, ne). */
        public ?string $targetScheduleId = null,
        /** When the request activates a membership or ownership assignment in PIM for Groups, this object represents the eligibility policy for the group. Otherwise, it is null. Supports $expand. */
        public ?string $activatedUsing = null,
        /** References the group that is the scope of the membership or ownership assignment request through PIM for Groups. Supports $expand and $select nested in $expand for select properties like id, displayName, and mail. */
        public ?string $group = null,
        /** References the principal that's in the scope of this membership or ownership assignment request through the group that's governed by PIM. Supports $expand and $select nested in $expand for id only. */
        public ?string $principal = null,
        /** Schedule created by this request. Supports $expand. */
        public ?string $targetSchedule = null
    ) {}
}

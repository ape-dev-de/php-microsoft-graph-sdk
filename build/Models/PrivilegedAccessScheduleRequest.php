<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessScheduleRequest
 */
class PrivilegedAccessScheduleRequest
{
    public function __construct(
        /** Represents the type of operation on the group membership or ownership assignment request. The possible values are: adminAssign, adminUpdate, adminRemove, selfActivate, selfDeactivate, adminExtend, adminRenew. adminAssign: For administrators to assign group membership or ownership to principals.adminRemove: For administrators to remove principals from group membership or ownership. adminUpdate: For administrators to change existing group membership or ownership assignments.adminExtend: For administrators to extend expiring assignments.adminRenew: For administrators to renew expired assignments.selfActivate: For principals to activate their assignments.selfDeactivate: For principals to deactivate their active assignments. */
        public ?string $action = null,
        /** Determines whether the call is a validation or an actual call. Only set this property if you want to check whether an activation is subject to additional rules like MFA before actually submitting the request. */
        public ?bool $isValidationOnly = null,
        /** A message provided by users and administrators when create they create the privilegedAccessGroupAssignmentScheduleRequest object. */
        public ?string $justification = null,
        /** The period of the group membership or ownership assignment. Recurring schedules are currently unsupported. */
        public ?string $scheduleInfo = null,
        /** Ticket details linked to the group membership or ownership assignment request including details of the ticket number and ticket system. */
        public ?string $ticketInfo = null
    ) {}
}

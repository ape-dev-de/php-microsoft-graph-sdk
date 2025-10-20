<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessScheduleRequest
 */
class PrivilegedAccessScheduleRequest
{
    /**
     * Represents the type of operation on the group membership or ownership assignment request. The possible values are: adminAssign, adminUpdate, adminRemove, selfActivate, selfDeactivate, adminExtend, adminRenew. adminAssign: For administrators to assign group membership or ownership to principals.adminRemove: For administrators to remove principals from group membership or ownership. adminUpdate: For administrators to change existing group membership or ownership assignments.adminExtend: For administrators to extend expiring assignments.adminRenew: For administrators to renew expired assignments.selfActivate: For principals to activate their assignments.selfDeactivate: For principals to deactivate their active assignments.
     */
    private ?string $action;

    /**
     * Determines whether the call is a validation or an actual call. Only set this property if you want to check whether an activation is subject to additional rules like MFA before actually submitting the request.
     */
    private ?bool $isValidationOnly;

    /**
     * A message provided by users and administrators when create they create the privilegedAccessGroupAssignmentScheduleRequest object.
     */
    private ?string $justification;

    /**
     * The period of the group membership or ownership assignment. Recurring schedules are currently unsupported.
     */
    private ?string $scheduleInfo;

    /**
     * Ticket details linked to the group membership or ownership assignment request including details of the ticket number and ticket system.
     */
    private ?string $ticketInfo;

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(?string $action): self
    {
        $this->action = $action;
        return $this;
    }

    public function getIsValidationOnly(): ?bool
    {
        return $this->isValidationOnly;
    }

    public function setIsValidationOnly(?bool $isValidationOnly): self
    {
        $this->isValidationOnly = $isValidationOnly;
        return $this;
    }

    public function getJustification(): ?string
    {
        return $this->justification;
    }

    public function setJustification(?string $justification): self
    {
        $this->justification = $justification;
        return $this;
    }

    public function getScheduleInfo(): ?string
    {
        return $this->scheduleInfo;
    }

    public function setScheduleInfo(?string $scheduleInfo): self
    {
        $this->scheduleInfo = $scheduleInfo;
        return $this;
    }

    public function getTicketInfo(): ?string
    {
        return $this->ticketInfo;
    }

    public function setTicketInfo(?string $ticketInfo): self
    {
        $this->ticketInfo = $ticketInfo;
        return $this;
    }

}

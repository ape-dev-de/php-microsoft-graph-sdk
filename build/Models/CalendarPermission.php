<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CalendarPermission
 */
class CalendarPermission
{
    /**
     * List of allowed sharing or delegating permission levels for the calendar. Possible values are: none, freeBusyRead, limitedRead, read, write, delegateWithoutPrivateEventAccess, delegateWithPrivateEventAccess, custom.
     */
    private array $allowedRoles = [];

    /**
     * Represents a share recipient or delegate who has access to the calendar. For the ''My Organization'' share recipient, the address property is null. Read-only.
     */
    private ?string $emailAddress;

    /**
     * True if the user in context (recipient or delegate) is inside the same organization as the calendar owner.
     */
    private ?bool $isInsideOrganization;

    /**
     * True if the user can be removed from the list of recipients or delegates for the specified calendar, false otherwise. The ''My organization'' user determines the permissions other people within your organization have to the given calendar. You can''t remove ''My organization'' as a share recipient to a calendar.
     */
    private ?bool $isRemovable;

    /**
     * Current permission level of the calendar share recipient or delegate.
     */
    private ?string $role;


    public function getAllowedRoles(): array
    {
        return $this->allowedRoles;
    }

    public function setAllowedRoles(array $allowedRoles): self
    {
        $this->allowedRoles = $allowedRoles;
        return $this;
    }

    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    public function setEmailAddress(?string $emailAddress): self
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    public function getIsInsideOrganization(): ?bool
    {
        return $this->isInsideOrganization;
    }

    public function setIsInsideOrganization(?bool $isInsideOrganization): self
    {
        $this->isInsideOrganization = $isInsideOrganization;
        return $this;
    }

    public function getIsRemovable(): ?bool
    {
        return $this->isRemovable;
    }

    public function setIsRemovable(?bool $isRemovable): self
    {
        $this->isRemovable = $isRemovable;
        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): self
    {
        $this->role = $role;
        return $this;
    }

}

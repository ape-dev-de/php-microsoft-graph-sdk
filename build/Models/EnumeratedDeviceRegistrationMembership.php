<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EnumeratedDeviceRegistrationMembership
 */
class EnumeratedDeviceRegistrationMembership
{
    /**
     */
    private ?string $groups;

    /**
     */
    private ?string $users;

    public function getGroups(): ?string
    {
        return $this->groups;
    }

    public function setGroups(?string $groups): self
    {
        $this->groups = $groups;
        return $this;
    }

    public function getUsers(): ?string
    {
        return $this->users;
    }

    public function setUsers(?string $users): self
    {
        $this->users = $users;
        return $this;
    }

}

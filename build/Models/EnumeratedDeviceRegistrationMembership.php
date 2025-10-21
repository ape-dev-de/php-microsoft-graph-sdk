<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EnumeratedDeviceRegistrationMembership
 */
class EnumeratedDeviceRegistrationMembership
{
    /**
     * @var string[]
     */
    private array $groups = [];

    /**
     * @var string[]
     */
    private array $users = [];


    /**
     * @return string[]
     */
    public function getGroups(): array
    {
        return $this->groups;
    }

    /**
     * @param string[] $groups
     */
    public function setGroups(array $groups): self
    {
        $this->groups = $groups;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getUsers(): array
    {
        return $this->users;
    }

    /**
     * @param string[] $users
     */
    public function setUsers(array $users): self
    {
        $this->users = $users;
        return $this;
    }

}

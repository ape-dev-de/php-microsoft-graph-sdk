<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceAndAppManagementRoleAssignment
 */
class DeviceAndAppManagementRoleAssignment
{
    /**
     * The Role Assignment resource. Role assignments tie together a role definition with members and scopes. There can be one or more role assignments per role. This applies to custom and built-in roles.
     * @var string[]
     */
    private array $members = [];


    /**
     * @return string[]
     */
    public function getMembers(): array
    {
        return $this->members;
    }

    /**
     * @param string[] $members
     */
    public function setMembers(array $members): self
    {
        $this->members = $members;
        return $this;
    }

}

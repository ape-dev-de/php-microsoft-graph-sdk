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
     */
    private ?string $members;

    public function getMembers(): ?string
    {
        return $this->members;
    }

    public function setMembers(?string $members): self
    {
        $this->members = $members;
        return $this;
    }

}

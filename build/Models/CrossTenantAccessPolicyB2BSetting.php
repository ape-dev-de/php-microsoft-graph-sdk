<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicyB2BSetting
 */
class CrossTenantAccessPolicyB2BSetting
{
    /**
     * The list of applications targeted with your cross-tenant access policy.
     */
    private ?string $applications;

    /**
     * The list of users and groups targeted with your cross-tenant access policy.
     */
    private ?string $usersAndGroups;


    public function getApplications(): ?string
    {
        return $this->applications;
    }

    public function setApplications(?string $applications): self
    {
        $this->applications = $applications;
        return $this;
    }

    public function getUsersAndGroups(): ?string
    {
        return $this->usersAndGroups;
    }

    public function setUsersAndGroups(?string $usersAndGroups): self
    {
        $this->usersAndGroups = $usersAndGroups;
        return $this;
    }

}

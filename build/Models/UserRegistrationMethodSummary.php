<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserRegistrationMethodSummary
 */
class UserRegistrationMethodSummary
{
    /**
     * Total number of users in the tenant.
     */
    private ?float $totalUserCount;

    /**
     * Number of users registered for each authentication method.
     */
    private array $userRegistrationMethodCounts = [];

    /**
     * The role type of the user. Possible values are: all, privilegedAdmin, admin, user, unknownFutureValue.
     */
    private ?string $userRoles;

    /**
     * User type. Possible values are: all, member, guest, unknownFutureValue.
     */
    private ?string $userTypes;

    public function getTotalUserCount(): ?float
    {
        return $this->totalUserCount;
    }

    public function setTotalUserCount(?float $totalUserCount): self
    {
        $this->totalUserCount = $totalUserCount;
        return $this;
    }

    public function getUserRegistrationMethodCounts(): array
    {
        return $this->userRegistrationMethodCounts;
    }

    public function setUserRegistrationMethodCounts(array $userRegistrationMethodCounts): self
    {
        $this->userRegistrationMethodCounts = $userRegistrationMethodCounts;
        return $this;
    }

    public function getUserRoles(): ?string
    {
        return $this->userRoles;
    }

    public function setUserRoles(?string $userRoles): self
    {
        $this->userRoles = $userRoles;
        return $this;
    }

    public function getUserTypes(): ?string
    {
        return $this->userTypes;
    }

    public function setUserTypes(?string $userTypes): self
    {
        $this->userTypes = $userTypes;
        return $this;
    }

}

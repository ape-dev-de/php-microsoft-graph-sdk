<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserRegistrationFeatureSummary
 */
class UserRegistrationFeatureSummary
{
    /**
     * Total number of users accounts, excluding those that are blocked.
     */
    private ?float $totalUserCount;

    /**
     * Number of users registered or capable for multi-factor authentication, self-service password reset, and passwordless authentication.
     */
    private array $userRegistrationFeatureCounts = [];

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

    public function getUserRegistrationFeatureCounts(): array
    {
        return $this->userRegistrationFeatureCounts;
    }

    public function setUserRegistrationFeatureCounts(array $userRegistrationFeatureCounts): self
    {
        $this->userRegistrationFeatureCounts = $userRegistrationFeatureCounts;
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

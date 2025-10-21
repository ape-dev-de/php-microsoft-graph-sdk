<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UsageRightsIncluded
 */
class UsageRightsIncluded
{
    /**
     * The email of owner label rights.
     */
    private ?string $ownerEmail;

    /**
     * The email of user with label user rights.
     */
    private ?string $userEmail;

    /**
     */
    private ?string $value;


    public function getOwnerEmail(): ?string
    {
        return $this->ownerEmail;
    }

    public function setOwnerEmail(?string $ownerEmail): self
    {
        $this->ownerEmail = $ownerEmail;
        return $this;
    }

    public function getUserEmail(): ?string
    {
        return $this->userEmail;
    }

    public function setUserEmail(?string $userEmail): self
    {
        $this->userEmail = $userEmail;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserRegistrationFeatureCount
 */
class UserRegistrationFeatureCount
{
    /**
     */
    private ?string $feature;

    /**
     * Number of users.
     */
    private ?string $userCount;

    public function getFeature(): ?string
    {
        return $this->feature;
    }

    public function setFeature(?string $feature): self
    {
        $this->feature = $feature;
        return $this;
    }

    public function getUserCount(): ?string
    {
        return $this->userCount;
    }

    public function setUserCount(?string $userCount): self
    {
        $this->userCount = $userCount;
        return $this;
    }

}

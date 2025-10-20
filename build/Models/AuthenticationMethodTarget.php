<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodTarget
 */
class AuthenticationMethodTarget
{
    /**
     * Determines if the user is enforced to register the authentication method.
     */
    private ?bool $isRegistrationRequired;

    /**
     */
    private ?string $targetType;

    public function getIsRegistrationRequired(): ?bool
    {
        return $this->isRegistrationRequired;
    }

    public function setIsRegistrationRequired(?bool $isRegistrationRequired): self
    {
        $this->isRegistrationRequired = $isRegistrationRequired;
        return $this;
    }

    public function getTargetType(): ?string
    {
        return $this->targetType;
    }

    public function setTargetType(?string $targetType): self
    {
        $this->targetType = $targetType;
        return $this;
    }

}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SelfServiceSignUpAuthenticationFlowConfiguration
 */
class SelfServiceSignUpAuthenticationFlowConfiguration
{
    /**
     * Indicates whether self-service sign-up flow is enabled or disabled. The default value is false. This property isn't a key. Required.
     */
    private ?string $isEnabled;

    public function getIsEnabled(): ?string
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?string $isEnabled): self
    {
        $this->isEnabled = $isEnabled;
        return $this;
    }

}

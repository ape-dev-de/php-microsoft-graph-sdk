<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VoiceAuthenticationMethodConfiguration
 */
class VoiceAuthenticationMethodConfiguration
{
    /**
     * true if users can register office phones, otherwise, false.
     */
    private ?bool $isOfficePhoneAllowed;

    /**
     * A collection of groups that are enabled to use the authentication method. Expanded by default.
     */
    private ?string $includeTargets;

    public function getIsOfficePhoneAllowed(): ?bool
    {
        return $this->isOfficePhoneAllowed;
    }

    public function setIsOfficePhoneAllowed(?bool $isOfficePhoneAllowed): self
    {
        $this->isOfficePhoneAllowed = $isOfficePhoneAllowed;
        return $this;
    }

    public function getIncludeTargets(): ?string
    {
        return $this->includeTargets;
    }

    public function setIncludeTargets(?string $includeTargets): self
    {
        $this->includeTargets = $includeTargets;
        return $this;
    }

}

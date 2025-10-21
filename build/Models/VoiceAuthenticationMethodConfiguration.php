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
     * @var string[]
     */
    private array $includeTargets = [];


    public function getIsOfficePhoneAllowed(): ?bool
    {
        return $this->isOfficePhoneAllowed;
    }

    public function setIsOfficePhoneAllowed(?bool $isOfficePhoneAllowed): self
    {
        $this->isOfficePhoneAllowed = $isOfficePhoneAllowed;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getIncludeTargets(): array
    {
        return $this->includeTargets;
    }

    /**
     * @param string[] $includeTargets
     */
    public function setIncludeTargets(array $includeTargets): self
    {
        $this->includeTargets = $includeTargets;
        return $this;
    }

}

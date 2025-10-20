<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SmsAuthenticationMethodConfiguration
 */
class SmsAuthenticationMethodConfiguration
{
    /**
     * A collection of groups that are enabled to use the authentication method.
     */
    private ?string $includeTargets;

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

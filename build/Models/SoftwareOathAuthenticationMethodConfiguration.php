<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SoftwareOathAuthenticationMethodConfiguration
 */
class SoftwareOathAuthenticationMethodConfiguration
{
    /**
     * A collection of groups that are enabled to use the authentication method. Expanded by default.
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

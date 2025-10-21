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
     * @var string[]
     */
    private array $includeTargets = [];


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

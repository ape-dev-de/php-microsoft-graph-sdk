<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationCombinationConfiguration
 */
class AuthenticationCombinationConfiguration
{
    /**
     * Which authentication method combinations this configuration applies to. Must be an allowedCombinations object, part of the authenticationStrengthPolicy. The only possible value for fido2combinationConfigurations is ''fido2''.
     */
    private ?string $appliesToCombinations;

    public function getAppliesToCombinations(): ?string
    {
        return $this->appliesToCombinations;
    }

    public function setAppliesToCombinations(?string $appliesToCombinations): self
    {
        $this->appliesToCombinations = $appliesToCombinations;
        return $this;
    }

}

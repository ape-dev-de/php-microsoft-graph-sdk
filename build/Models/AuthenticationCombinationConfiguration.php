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
     * @var string[]
     */
    private array $appliesToCombinations = [];


    /**
     * @return string[]
     */
    public function getAppliesToCombinations(): array
    {
        return $this->appliesToCombinations;
    }

    /**
     * @param string[] $appliesToCombinations
     */
    public function setAppliesToCombinations(array $appliesToCombinations): self
    {
        $this->appliesToCombinations = $appliesToCombinations;
        return $this;
    }

}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationStrengthRoot
 */
class AuthenticationStrengthRoot
{
    /**
     */
    private array $combinations = [];

    /**
     * Names and descriptions of all valid authentication method modes in the system.
     */
    private array $authenticationMethodModes = [];

    /**
     * A collection of authentication strength policies that exist for this tenant, including both built-in and custom policies.
     * @var string[]
     */
    private array $policies = [];


    public function getCombinations(): array
    {
        return $this->combinations;
    }

    public function setCombinations(array $combinations): self
    {
        $this->combinations = $combinations;
        return $this;
    }

    public function getAuthenticationMethodModes(): array
    {
        return $this->authenticationMethodModes;
    }

    public function setAuthenticationMethodModes(array $authenticationMethodModes): self
    {
        $this->authenticationMethodModes = $authenticationMethodModes;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getPolicies(): array
    {
        return $this->policies;
    }

    /**
     * @param string[] $policies
     */
    public function setPolicies(array $policies): self
    {
        $this->policies = $policies;
        return $this;
    }

}

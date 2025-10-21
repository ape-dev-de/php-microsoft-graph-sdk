<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessGrantControls
 */
class ConditionalAccessGrantControls
{
    /**
     * List of values of built-in controls required by the policy. Possible values: block, mfa, compliantDevice, domainJoinedDevice, approvedApplication, compliantApplication, passwordChange, unknownFutureValue.
     */
    private array $builtInControls = [];

    /**
     * List of custom controls IDs required by the policy. For more information, see Custom controls.
     * @var string[]
     */
    private array $customAuthenticationFactors = [];

    /**
     * Defines the relationship of the grant controls. Possible values: AND, OR.
     */
    private ?string $operator;

    /**
     * List of terms of use IDs required by the policy.
     * @var string[]
     */
    private array $termsOfUse = [];

    /**
     */
    private ?string $authenticationStrength;


    public function getBuiltInControls(): array
    {
        return $this->builtInControls;
    }

    public function setBuiltInControls(array $builtInControls): self
    {
        $this->builtInControls = $builtInControls;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getCustomAuthenticationFactors(): array
    {
        return $this->customAuthenticationFactors;
    }

    /**
     * @param string[] $customAuthenticationFactors
     */
    public function setCustomAuthenticationFactors(array $customAuthenticationFactors): self
    {
        $this->customAuthenticationFactors = $customAuthenticationFactors;
        return $this;
    }

    public function getOperator(): ?string
    {
        return $this->operator;
    }

    public function setOperator(?string $operator): self
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTermsOfUse(): array
    {
        return $this->termsOfUse;
    }

    /**
     * @param string[] $termsOfUse
     */
    public function setTermsOfUse(array $termsOfUse): self
    {
        $this->termsOfUse = $termsOfUse;
        return $this;
    }

    public function getAuthenticationStrength(): ?string
    {
        return $this->authenticationStrength;
    }

    public function setAuthenticationStrength(?string $authenticationStrength): self
    {
        $this->authenticationStrength = $authenticationStrength;
        return $this;
    }

}

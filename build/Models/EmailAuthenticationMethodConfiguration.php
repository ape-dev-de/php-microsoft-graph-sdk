<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmailAuthenticationMethodConfiguration
 */
class EmailAuthenticationMethodConfiguration
{
    /**
     * Determines whether email OTP is usable by external users for authentication. Possible values are: default, enabled, disabled, unknownFutureValue. Tenants in the default state who didn''t use public preview have email OTP enabled beginning in October 2021.
     */
    private ?string $allowExternalIdToUseEmailOtp;

    /**
     * A collection of groups that are enabled to use the authentication method.
     * @var string[]
     */
    private array $includeTargets = [];


    public function getAllowExternalIdToUseEmailOtp(): ?string
    {
        return $this->allowExternalIdToUseEmailOtp;
    }

    public function setAllowExternalIdToUseEmailOtp(?string $allowExternalIdToUseEmailOtp): self
    {
        $this->allowExternalIdToUseEmailOtp = $allowExternalIdToUseEmailOtp;
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

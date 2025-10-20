<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Fido2AuthenticationMethodConfiguration
 */
class Fido2AuthenticationMethodConfiguration
{
    /**
     * Determines whether attestation must be enforced for FIDO2 security key registration.
     */
    private ?bool $isAttestationEnforced;

    /**
     * Determines if users can register new FIDO2 security keys.
     */
    private ?bool $isSelfServiceRegistrationAllowed;

    /**
     * Controls whether key restrictions are enforced on FIDO2 security keys, either allowing or disallowing certain key types as defined by Authenticator Attestation GUID (AAGUID), an identifier that indicates the type (for example, make and model) of the authenticator.
     */
    private ?string $keyRestrictions;

    /**
     * A collection of groups that are enabled to use the authentication method.
     */
    private ?string $includeTargets;

    public function getIsAttestationEnforced(): ?bool
    {
        return $this->isAttestationEnforced;
    }

    public function setIsAttestationEnforced(?bool $isAttestationEnforced): self
    {
        $this->isAttestationEnforced = $isAttestationEnforced;
        return $this;
    }

    public function getIsSelfServiceRegistrationAllowed(): ?bool
    {
        return $this->isSelfServiceRegistrationAllowed;
    }

    public function setIsSelfServiceRegistrationAllowed(?bool $isSelfServiceRegistrationAllowed): self
    {
        $this->isSelfServiceRegistrationAllowed = $isSelfServiceRegistrationAllowed;
        return $this;
    }

    public function getKeyRestrictions(): ?string
    {
        return $this->keyRestrictions;
    }

    public function setKeyRestrictions(?string $keyRestrictions): self
    {
        $this->keyRestrictions = $keyRestrictions;
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

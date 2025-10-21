<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * X509CertificateAuthenticationModeConfiguration
 */
class X509CertificateAuthenticationModeConfiguration
{
    /**
     * Rules are configured in addition to the authentication mode to bind a specific x509CertificateRuleType to an x509CertificateAuthenticationMode. For example, bind the policyOID with identifier 1.32.132.343 to x509CertificateMultiFactor authentication mode.
     */
    private array $rules = [];

    /**
     * The type of strong authentication mode. The possible values are: x509CertificateSingleFactor, x509CertificateMultiFactor, unknownFutureValue.
     */
    private ?string $x509CertificateAuthenticationDefaultMode;

    /**
     */
    private ?string $x509CertificateDefaultRequiredAffinityLevel;


    public function getRules(): array
    {
        return $this->rules;
    }

    public function setRules(array $rules): self
    {
        $this->rules = $rules;
        return $this;
    }

    public function getX509CertificateAuthenticationDefaultMode(): ?string
    {
        return $this->x509CertificateAuthenticationDefaultMode;
    }

    public function setX509CertificateAuthenticationDefaultMode(?string $x509CertificateAuthenticationDefaultMode): self
    {
        $this->x509CertificateAuthenticationDefaultMode = $x509CertificateAuthenticationDefaultMode;
        return $this;
    }

    public function getX509CertificateDefaultRequiredAffinityLevel(): ?string
    {
        return $this->x509CertificateDefaultRequiredAffinityLevel;
    }

    public function setX509CertificateDefaultRequiredAffinityLevel(?string $x509CertificateDefaultRequiredAffinityLevel): self
    {
        $this->x509CertificateDefaultRequiredAffinityLevel = $x509CertificateDefaultRequiredAffinityLevel;
        return $this;
    }

}

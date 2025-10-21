<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * X509CertificateRule
 */
class X509CertificateRule
{
    /**
     * The identifier of the X.509 certificate. Required.
     */
    private ?string $identifier;

    /**
     */
    private ?string $issuerSubjectIdentifier;

    /**
     */
    private ?string $policyOidIdentifier;

    /**
     * The type of strong authentication mode. The possible values are: x509CertificateSingleFactor, x509CertificateMultiFactor, unknownFutureValue. Required.
     */
    private ?string $x509CertificateAuthenticationMode;

    /**
     */
    private ?string $x509CertificateRequiredAffinityLevel;

    /**
     * The type of the X.509 certificate mode configuration rule. The possible values are: issuerSubject, policyOID, unknownFutureValue. Required.
     */
    private ?string $x509CertificateRuleType;


    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function setIdentifier(?string $identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }

    public function getIssuerSubjectIdentifier(): ?string
    {
        return $this->issuerSubjectIdentifier;
    }

    public function setIssuerSubjectIdentifier(?string $issuerSubjectIdentifier): self
    {
        $this->issuerSubjectIdentifier = $issuerSubjectIdentifier;
        return $this;
    }

    public function getPolicyOidIdentifier(): ?string
    {
        return $this->policyOidIdentifier;
    }

    public function setPolicyOidIdentifier(?string $policyOidIdentifier): self
    {
        $this->policyOidIdentifier = $policyOidIdentifier;
        return $this;
    }

    public function getX509CertificateAuthenticationMode(): ?string
    {
        return $this->x509CertificateAuthenticationMode;
    }

    public function setX509CertificateAuthenticationMode(?string $x509CertificateAuthenticationMode): self
    {
        $this->x509CertificateAuthenticationMode = $x509CertificateAuthenticationMode;
        return $this;
    }

    public function getX509CertificateRequiredAffinityLevel(): ?string
    {
        return $this->x509CertificateRequiredAffinityLevel;
    }

    public function setX509CertificateRequiredAffinityLevel(?string $x509CertificateRequiredAffinityLevel): self
    {
        $this->x509CertificateRequiredAffinityLevel = $x509CertificateRequiredAffinityLevel;
        return $this;
    }

    public function getX509CertificateRuleType(): ?string
    {
        return $this->x509CertificateRuleType;
    }

    public function setX509CertificateRuleType(?string $x509CertificateRuleType): self
    {
        $this->x509CertificateRuleType = $x509CertificateRuleType;
        return $this;
    }

}

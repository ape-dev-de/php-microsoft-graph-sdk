<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * X509CertificateCRLValidationConfiguration
 */
class X509CertificateCRLValidationConfiguration
{
    /**
     * Represents the SKIs of CAs that should be excluded from the valid CRL distribution point check. SKI is represented as a hexadecimal string.
     * @var string[]
     */
    private array $exemptedCertificateAuthoritiesSubjectKeyIdentifiers = [];

    /**
     */
    private ?string $state;


    /**
     * @return string[]
     */
    public function getExemptedCertificateAuthoritiesSubjectKeyIdentifiers(): array
    {
        return $this->exemptedCertificateAuthoritiesSubjectKeyIdentifiers;
    }

    /**
     * @param string[] $exemptedCertificateAuthoritiesSubjectKeyIdentifiers
     */
    public function setExemptedCertificateAuthoritiesSubjectKeyIdentifiers(array $exemptedCertificateAuthoritiesSubjectKeyIdentifiers): self
    {
        $this->exemptedCertificateAuthoritiesSubjectKeyIdentifiers = $exemptedCertificateAuthoritiesSubjectKeyIdentifiers;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

}

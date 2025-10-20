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
     */
    private ?string $exemptedCertificateAuthoritiesSubjectKeyIdentifiers;

    /**
     */
    private ?string $state;

    public function getExemptedCertificateAuthoritiesSubjectKeyIdentifiers(): ?string
    {
        return $this->exemptedCertificateAuthoritiesSubjectKeyIdentifiers;
    }

    public function setExemptedCertificateAuthoritiesSubjectKeyIdentifiers(?string $exemptedCertificateAuthoritiesSubjectKeyIdentifiers): self
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

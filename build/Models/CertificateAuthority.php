<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CertificateAuthority
 */
class CertificateAuthority
{
    /**
     * Required. The base64 encoded string representing the public certificate.
     */
    private ?string $certificate;

    /**
     * The URL of the certificate revocation list.
     */
    private ?string $certificateRevocationListUrl;

    /**
     * The URL contains the list of all revoked certificates since the last time a full certificate revocaton list was created.
     */
    private ?string $deltaCertificateRevocationListUrl;

    /**
     * Required. true if the trusted certificate is a root authority, false if the trusted certificate is an intermediate authority.
     */
    private ?bool $isRootAuthority;

    /**
     * The issuer of the certificate, calculated from the certificate value. Read-only.
     */
    private ?string $issuer;

    /**
     * The subject key identifier of the certificate, calculated from the certificate value. Read-only.
     */
    private ?string $issuerSki;

    public function getCertificate(): ?string
    {
        return $this->certificate;
    }

    public function setCertificate(?string $certificate): self
    {
        $this->certificate = $certificate;
        return $this;
    }

    public function getCertificateRevocationListUrl(): ?string
    {
        return $this->certificateRevocationListUrl;
    }

    public function setCertificateRevocationListUrl(?string $certificateRevocationListUrl): self
    {
        $this->certificateRevocationListUrl = $certificateRevocationListUrl;
        return $this;
    }

    public function getDeltaCertificateRevocationListUrl(): ?string
    {
        return $this->deltaCertificateRevocationListUrl;
    }

    public function setDeltaCertificateRevocationListUrl(?string $deltaCertificateRevocationListUrl): self
    {
        $this->deltaCertificateRevocationListUrl = $deltaCertificateRevocationListUrl;
        return $this;
    }

    public function getIsRootAuthority(): ?bool
    {
        return $this->isRootAuthority;
    }

    public function setIsRootAuthority(?bool $isRootAuthority): self
    {
        $this->isRootAuthority = $isRootAuthority;
        return $this;
    }

    public function getIssuer(): ?string
    {
        return $this->issuer;
    }

    public function setIssuer(?string $issuer): self
    {
        $this->issuer = $issuer;
        return $this;
    }

    public function getIssuerSki(): ?string
    {
        return $this->issuerSki;
    }

    public function setIssuerSki(?string $issuerSki): self
    {
        $this->issuerSki = $issuerSki;
        return $this;
    }

}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Pkcs12CertificateInformation
 */
class Pkcs12CertificateInformation
{
    /**
     * Represents whether the certificate is the active certificate to be used for calling the API connector. The active certificate is the most recently uploaded certificate that isn't yet expired but whose notBefore time is in the past.
     */
    private ?bool $isActive;

    /**
     * The certificate''s expiry. This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
     */
    private ?float $notAfter;

    /**
     * The certificate''s issue time (not before). This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
     */
    private ?float $notBefore;

    /**
     * The certificate thumbprint.
     */
    private ?string $thumbprint;

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;
        return $this;
    }

    public function getNotAfter(): ?float
    {
        return $this->notAfter;
    }

    public function setNotAfter(?float $notAfter): self
    {
        $this->notAfter = $notAfter;
        return $this;
    }

    public function getNotBefore(): ?float
    {
        return $this->notBefore;
    }

    public function setNotBefore(?float $notBefore): self
    {
        $this->notBefore = $notBefore;
        return $this;
    }

    public function getThumbprint(): ?string
    {
        return $this->thumbprint;
    }

    public function setThumbprint(?string $thumbprint): self
    {
        $this->thumbprint = $thumbprint;
        return $this;
    }

}

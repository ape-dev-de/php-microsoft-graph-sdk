<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Certification
 */
class Certification
{
    /**
     * URL that shows certification details for the application.
     */
    private ?string $certificationDetailsUrl;

    /**
     * The timestamp when the current certification for the application expires.
     */
    private ?\DateTimeInterface $certificationExpirationDateTime;

    /**
     * Indicates whether the application is certified by Microsoft.
     */
    private ?bool $isCertifiedByMicrosoft;

    /**
     * Indicates whether the application developer or publisher completed Publisher Attestation.
     */
    private ?bool $isPublisherAttested;

    /**
     * The timestamp when the certification for the application was most recently added or updated.
     */
    private ?\DateTimeInterface $lastCertificationDateTime;

    public function getCertificationDetailsUrl(): ?string
    {
        return $this->certificationDetailsUrl;
    }

    public function setCertificationDetailsUrl(?string $certificationDetailsUrl): self
    {
        $this->certificationDetailsUrl = $certificationDetailsUrl;
        return $this;
    }

    public function getCertificationExpirationDateTime(): ?\DateTimeInterface
    {
        return $this->certificationExpirationDateTime;
    }

    public function setCertificationExpirationDateTime(?\DateTimeInterface $certificationExpirationDateTime): self
    {
        $this->certificationExpirationDateTime = $certificationExpirationDateTime;
        return $this;
    }

    public function getIsCertifiedByMicrosoft(): ?bool
    {
        return $this->isCertifiedByMicrosoft;
    }

    public function setIsCertifiedByMicrosoft(?bool $isCertifiedByMicrosoft): self
    {
        $this->isCertifiedByMicrosoft = $isCertifiedByMicrosoft;
        return $this;
    }

    public function getIsPublisherAttested(): ?bool
    {
        return $this->isPublisherAttested;
    }

    public function setIsPublisherAttested(?bool $isPublisherAttested): self
    {
        $this->isPublisherAttested = $isPublisherAttested;
        return $this;
    }

    public function getLastCertificationDateTime(): ?\DateTimeInterface
    {
        return $this->lastCertificationDateTime;
    }

    public function setLastCertificationDateTime(?\DateTimeInterface $lastCertificationDateTime): self
    {
        $this->lastCertificationDateTime = $lastCertificationDateTime;
        return $this;
    }

}

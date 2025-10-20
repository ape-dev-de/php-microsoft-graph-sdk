<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CertificateAuthorityDetail
 */
class CertificateAuthorityDetail
{
    /**
     * The public key of the certificate authority.
     */
    private ?string $certificate;

    /**
     * The type of certificate authority. The possible values are: root, intermediate, unknownFutureValue. Supports $filter (eq).
     */
    private ?string $certificateAuthorityType;

    /**
     * The URL to check if the certificate is revoked.
     */
    private ?string $certificateRevocationListUrl;

    /**
     * The date and time when the certificate authority was created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     */
    private ?string $deltaCertificateRevocationListUrl;

    /**
     * The display name of the certificate authority.
     */
    private ?string $displayName;

    /**
     * The date and time when the certificate authority expires. Supports $filter (eq) and $orderby.
     */
    private ?\DateTimeInterface $expirationDateTime;

    /**
     * Indicates whether the certificate picker presents the certificate authority to the user to use for authentication. Default value is false. Optional.
     */
    private ?bool $isIssuerHintEnabled;

    /**
     * The issuer of the certificate authority.
     */
    private ?string $issuer;

    /**
     * The subject key identifier of certificate authority.
     */
    private ?string $issuerSubjectKeyIdentifier;

    /**
     * The thumbprint of certificate authority certificate. Supports $filter (eq, startswith).
     */
    private ?string $thumbprint;

    public function getCertificate(): ?string
    {
        return $this->certificate;
    }

    public function setCertificate(?string $certificate): self
    {
        $this->certificate = $certificate;
        return $this;
    }

    public function getCertificateAuthorityType(): ?string
    {
        return $this->certificateAuthorityType;
    }

    public function setCertificateAuthorityType(?string $certificateAuthorityType): self
    {
        $this->certificateAuthorityType = $certificateAuthorityType;
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

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
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

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getExpirationDateTime(): ?\DateTimeInterface
    {
        return $this->expirationDateTime;
    }

    public function setExpirationDateTime(?\DateTimeInterface $expirationDateTime): self
    {
        $this->expirationDateTime = $expirationDateTime;
        return $this;
    }

    public function getIsIssuerHintEnabled(): ?bool
    {
        return $this->isIssuerHintEnabled;
    }

    public function setIsIssuerHintEnabled(?bool $isIssuerHintEnabled): self
    {
        $this->isIssuerHintEnabled = $isIssuerHintEnabled;
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

    public function getIssuerSubjectKeyIdentifier(): ?string
    {
        return $this->issuerSubjectKeyIdentifier;
    }

    public function setIssuerSubjectKeyIdentifier(?string $issuerSubjectKeyIdentifier): self
    {
        $this->issuerSubjectKeyIdentifier = $issuerSubjectKeyIdentifier;
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

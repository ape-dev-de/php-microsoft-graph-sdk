<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ApplePushNotificationCertificate
 */
class ApplePushNotificationCertificate
{
    /**
     * Apple Id of the account used to create the MDM push certificate.
     */
    private ?string $appleIdentifier;

    /**
     * Not yet documented
     */
    private ?string $certificate;

    /**
     * Certificate serial number. This property is read-only.
     */
    private ?string $certificateSerialNumber;

    /**
     * The reason the certificate upload failed.
     */
    private ?string $certificateUploadFailureReason;

    /**
     * The certificate upload status.
     */
    private ?string $certificateUploadStatus;

    /**
     * The expiration date and time for Apple push notification certificate.
     */
    private ?\DateTimeInterface $expirationDateTime;

    /**
     * Last modified date and time for Apple push notification certificate.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * Apple push notification certificate.
     */
    private ?string $topicIdentifier;

    public function getAppleIdentifier(): ?string
    {
        return $this->appleIdentifier;
    }

    public function setAppleIdentifier(?string $appleIdentifier): self
    {
        $this->appleIdentifier = $appleIdentifier;
        return $this;
    }

    public function getCertificate(): ?string
    {
        return $this->certificate;
    }

    public function setCertificate(?string $certificate): self
    {
        $this->certificate = $certificate;
        return $this;
    }

    public function getCertificateSerialNumber(): ?string
    {
        return $this->certificateSerialNumber;
    }

    public function setCertificateSerialNumber(?string $certificateSerialNumber): self
    {
        $this->certificateSerialNumber = $certificateSerialNumber;
        return $this;
    }

    public function getCertificateUploadFailureReason(): ?string
    {
        return $this->certificateUploadFailureReason;
    }

    public function setCertificateUploadFailureReason(?string $certificateUploadFailureReason): self
    {
        $this->certificateUploadFailureReason = $certificateUploadFailureReason;
        return $this;
    }

    public function getCertificateUploadStatus(): ?string
    {
        return $this->certificateUploadStatus;
    }

    public function setCertificateUploadStatus(?string $certificateUploadStatus): self
    {
        $this->certificateUploadStatus = $certificateUploadStatus;
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

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getTopicIdentifier(): ?string
    {
        return $this->topicIdentifier;
    }

    public function setTopicIdentifier(?string $topicIdentifier): self
    {
        $this->topicIdentifier = $topicIdentifier;
        return $this;
    }

}

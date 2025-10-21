<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AgreementAcceptance
 */
class AgreementAcceptance
{
    /**
     * The identifier of the agreement file accepted by the user.
     */
    private ?string $agreementFileId;

    /**
     * The identifier of the agreement.
     */
    private ?string $agreementId;

    /**
     * The display name of the device used for accepting the agreement.
     */
    private ?string $deviceDisplayName;

    /**
     * The unique identifier of the device used for accepting the agreement. Supports $filter (eq) and eq for null values.
     */
    private ?string $deviceId;

    /**
     * The operating system used to accept the agreement.
     */
    private ?string $deviceOSType;

    /**
     * The operating system version of the device used to accept the agreement.
     */
    private ?string $deviceOSVersion;

    /**
     * The expiration date time of the acceptance. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ge, le) and eq for null values.
     */
    private ?\DateTimeInterface $expirationDateTime;

    /**
     * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $recordedDateTime;

    /**
     * The state of the agreement acceptance. Possible values are: accepted, declined. Supports $filter (eq).
     */
    private ?string $state;

    /**
     * Display name of the user when the acceptance was recorded.
     */
    private ?string $userDisplayName;

    /**
     * Email of the user when the acceptance was recorded.
     */
    private ?string $userEmail;

    /**
     * The identifier of the user who accepted the agreement. Supports $filter (eq).
     */
    private ?string $userId;

    /**
     * UPN of the user when the acceptance was recorded.
     */
    private ?string $userPrincipalName;


    public function getAgreementFileId(): ?string
    {
        return $this->agreementFileId;
    }

    public function setAgreementFileId(?string $agreementFileId): self
    {
        $this->agreementFileId = $agreementFileId;
        return $this;
    }

    public function getAgreementId(): ?string
    {
        return $this->agreementId;
    }

    public function setAgreementId(?string $agreementId): self
    {
        $this->agreementId = $agreementId;
        return $this;
    }

    public function getDeviceDisplayName(): ?string
    {
        return $this->deviceDisplayName;
    }

    public function setDeviceDisplayName(?string $deviceDisplayName): self
    {
        $this->deviceDisplayName = $deviceDisplayName;
        return $this;
    }

    public function getDeviceId(): ?string
    {
        return $this->deviceId;
    }

    public function setDeviceId(?string $deviceId): self
    {
        $this->deviceId = $deviceId;
        return $this;
    }

    public function getDeviceOSType(): ?string
    {
        return $this->deviceOSType;
    }

    public function setDeviceOSType(?string $deviceOSType): self
    {
        $this->deviceOSType = $deviceOSType;
        return $this;
    }

    public function getDeviceOSVersion(): ?string
    {
        return $this->deviceOSVersion;
    }

    public function setDeviceOSVersion(?string $deviceOSVersion): self
    {
        $this->deviceOSVersion = $deviceOSVersion;
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

    public function getRecordedDateTime(): ?\DateTimeInterface
    {
        return $this->recordedDateTime;
    }

    public function setRecordedDateTime(?\DateTimeInterface $recordedDateTime): self
    {
        $this->recordedDateTime = $recordedDateTime;
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

    public function getUserDisplayName(): ?string
    {
        return $this->userDisplayName;
    }

    public function setUserDisplayName(?string $userDisplayName): self
    {
        $this->userDisplayName = $userDisplayName;
        return $this;
    }

    public function getUserEmail(): ?string
    {
        return $this->userEmail;
    }

    public function setUserEmail(?string $userEmail): self
    {
        $this->userEmail = $userEmail;
        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

    public function getUserPrincipalName(): ?string
    {
        return $this->userPrincipalName;
    }

    public function setUserPrincipalName(?string $userPrincipalName): self
    {
        $this->userPrincipalName = $userPrincipalName;
        return $this;
    }

}

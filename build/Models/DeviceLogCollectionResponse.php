<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceLogCollectionResponse
 */
class DeviceLogCollectionResponse
{
    /**
     * The User Principal Name (UPN) of the user that enrolled the device.
     */
    private ?string $enrolledByUser;

    /**
     * The DateTime of the expiration of the logs.
     */
    private ?\DateTimeInterface $expirationDateTimeUTC;

    /**
     * The UPN for who initiated the request.
     */
    private ?string $initiatedByUserPrincipalName;

    /**
     * Indicates Intune device unique identifier.
     */
    private ?string $managedDeviceId;

    /**
     * The DateTime the request was received.
     */
    private ?\DateTimeInterface $receivedDateTimeUTC;

    /**
     * The DateTime of the request.
     */
    private ?\DateTimeInterface $requestedDateTimeUTC;

    /**
     * The size of the logs in KB. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     */
    private ?string $sizeInKB;

    /**
     * Windows Log Collection request entity.
     */
    private ?string $status;

    public function getEnrolledByUser(): ?string
    {
        return $this->enrolledByUser;
    }

    public function setEnrolledByUser(?string $enrolledByUser): self
    {
        $this->enrolledByUser = $enrolledByUser;
        return $this;
    }

    public function getExpirationDateTimeUTC(): ?\DateTimeInterface
    {
        return $this->expirationDateTimeUTC;
    }

    public function setExpirationDateTimeUTC(?\DateTimeInterface $expirationDateTimeUTC): self
    {
        $this->expirationDateTimeUTC = $expirationDateTimeUTC;
        return $this;
    }

    public function getInitiatedByUserPrincipalName(): ?string
    {
        return $this->initiatedByUserPrincipalName;
    }

    public function setInitiatedByUserPrincipalName(?string $initiatedByUserPrincipalName): self
    {
        $this->initiatedByUserPrincipalName = $initiatedByUserPrincipalName;
        return $this;
    }

    public function getManagedDeviceId(): ?string
    {
        return $this->managedDeviceId;
    }

    public function setManagedDeviceId(?string $managedDeviceId): self
    {
        $this->managedDeviceId = $managedDeviceId;
        return $this;
    }

    public function getReceivedDateTimeUTC(): ?\DateTimeInterface
    {
        return $this->receivedDateTimeUTC;
    }

    public function setReceivedDateTimeUTC(?\DateTimeInterface $receivedDateTimeUTC): self
    {
        $this->receivedDateTimeUTC = $receivedDateTimeUTC;
        return $this;
    }

    public function getRequestedDateTimeUTC(): ?\DateTimeInterface
    {
        return $this->requestedDateTimeUTC;
    }

    public function setRequestedDateTimeUTC(?\DateTimeInterface $requestedDateTimeUTC): self
    {
        $this->requestedDateTimeUTC = $requestedDateTimeUTC;
        return $this;
    }

    public function getSizeInKB(): ?string
    {
        return $this->sizeInKB;
    }

    public function setSizeInKB(?string $sizeInKB): self
    {
        $this->sizeInKB = $sizeInKB;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

}

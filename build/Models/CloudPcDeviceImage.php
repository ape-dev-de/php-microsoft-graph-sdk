<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcDeviceImage
 */
class CloudPcDeviceImage
{
    /**
     * The display name of the associated device image. The device image display name and the version are used to uniquely identify the Cloud PC device image. Read-only.
     */
    private ?string $displayName;

    /**
     * The error code of the status of the image that indicates why the upload failed, if applicable. Possible values are: internalServerError, sourceImageNotFound, osVersionNotSupported, sourceImageInvalid, sourceImageNotGeneralized, unknownFutureValue, vmAlreadyAzureAdJoined, paidSourceImageNotSupport, sourceImageNotSupportCustomizeVMName, sourceImageSizeExceedsLimitation. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: vmAlreadyAzureAdJoined, paidSourceImageNotSupport, sourceImageNotSupportCustomizeVMName, sourceImageSizeExceedsLimitation. Read-only.
     */
    private ?string $errorCode;

    /**
     * The date when the image became unavailable. Read-only.
     */
    private ?\DateTimeInterface $expirationDate;

    /**
     * The data and time when the image was last modified. The timestamp represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The operating system (OS) of the image. For example, Windows 11 Enterprise. Read-only.
     */
    private ?string $operatingSystem;

    /**
     * The OS build version of the image. For example, 1909. Read-only.
     */
    private ?string $osBuildNumber;

    /**
     * The OS status of this image. Possible values are: supported, supportedWithWarning, unknown, unknownFutureValue. The default value is unknown. Read-only.
     */
    private ?string $osStatus;

    /**
     * The unique identifier (ID) of the source image resource on Azure. The required ID format is: ''/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Compute/images/{imageName}''. Read-only.
     */
    private ?string $sourceImageResourceId;

    /**
     * The status of the image on the Cloud PC. Possible values are: pending, ready, failed, unknownFutureValue. Read-only.
     */
    private ?string $status;

    /**
     * The image version. For example, 0.0.1 and 1.5.13. Read-only.
     */
    private ?string $version;


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }

    public function setErrorCode(?string $errorCode): self
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    public function getExpirationDate(): ?\DateTimeInterface
    {
        return $this->expirationDate;
    }

    public function setExpirationDate(?\DateTimeInterface $expirationDate): self
    {
        $this->expirationDate = $expirationDate;
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

    public function getOperatingSystem(): ?string
    {
        return $this->operatingSystem;
    }

    public function setOperatingSystem(?string $operatingSystem): self
    {
        $this->operatingSystem = $operatingSystem;
        return $this;
    }

    public function getOsBuildNumber(): ?string
    {
        return $this->osBuildNumber;
    }

    public function setOsBuildNumber(?string $osBuildNumber): self
    {
        $this->osBuildNumber = $osBuildNumber;
        return $this;
    }

    public function getOsStatus(): ?string
    {
        return $this->osStatus;
    }

    public function setOsStatus(?string $osStatus): self
    {
        $this->osStatus = $osStatus;
        return $this;
    }

    public function getSourceImageResourceId(): ?string
    {
        return $this->sourceImageResourceId;
    }

    public function setSourceImageResourceId(?string $sourceImageResourceId): self
    {
        $this->sourceImageResourceId = $sourceImageResourceId;
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

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;
        return $this;
    }

}

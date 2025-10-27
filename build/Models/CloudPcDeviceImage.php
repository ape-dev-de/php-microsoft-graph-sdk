<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcDeviceImage
 */
class CloudPcDeviceImage
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The display name of the associated device image. The device image display name and the version are used to uniquely identify the Cloud PC device image. Read-only. */
    public ?string $displayName = null;

    /** 
     * The error code of the status of the image that indicates why the upload failed, if applicable. Possible values are: internalServerError, sourceImageNotFound, osVersionNotSupported, sourceImageInvalid, sourceImageNotGeneralized, unknownFutureValue, vmAlreadyAzureAdJoined, paidSourceImageNotSupport, sourceImageNotSupportCustomizeVMName, sourceImageSizeExceedsLimitation. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: vmAlreadyAzureAdJoined, paidSourceImageNotSupport, sourceImageNotSupportCustomizeVMName, sourceImageSizeExceedsLimitation. Read-only.
     * @var CloudPcDeviceImageErrorCode|\stdClass|null
     */
    public mixed $errorCode = null;

    /** The date when the image became unavailable. Read-only. */
    public ?\DateTimeInterface $expirationDate = null;

    /** The data and time when the image was last modified. The timestamp represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** The operating system (OS) of the image. For example, Windows 11 Enterprise. Read-only. */
    public ?string $operatingSystem = null;

    /** The OS build version of the image. For example, 1909. Read-only. */
    public ?string $osBuildNumber = null;

    /** 
     * The OS status of this image. Possible values are: supported, supportedWithWarning, unknown, unknownFutureValue. The default value is unknown. Read-only.
     * @var CloudPcDeviceImageOsStatus|\stdClass|null
     */
    public mixed $osStatus = null;

    /** The unique identifier (ID) of the source image resource on Azure. The required ID format is: '/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Compute/images/{imageName}'. Read-only. */
    public ?string $sourceImageResourceId = null;

    /** 
     * The status of the image on the Cloud PC. Possible values are: pending, ready, failed, unknownFutureValue. Read-only.
     * @var CloudPcDeviceImageStatus|\stdClass|null
     */
    public mixed $status = null;

    /** The image version. For example, 0.0.1 and 1.5.13. Read-only. */
    public ?string $version = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['errorCode'])) {
            $this->errorCode = is_array($data['errorCode']) ? new CloudPcDeviceImageErrorCode($data['errorCode']) : $data['errorCode'];
        }
        if (isset($data['expirationDate'])) {
            $this->expirationDate = is_string($data['expirationDate']) ? new \DateTimeImmutable($data['expirationDate']) : $data['expirationDate'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['operatingSystem'])) {
            $this->operatingSystem = $data['operatingSystem'];
        }
        if (isset($data['osBuildNumber'])) {
            $this->osBuildNumber = $data['osBuildNumber'];
        }
        if (isset($data['osStatus'])) {
            $this->osStatus = is_array($data['osStatus']) ? new CloudPcDeviceImageOsStatus($data['osStatus']) : $data['osStatus'];
        }
        if (isset($data['sourceImageResourceId'])) {
            $this->sourceImageResourceId = $data['sourceImageResourceId'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new CloudPcDeviceImageStatus($data['status']) : $data['status'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}

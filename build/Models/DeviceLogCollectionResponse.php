<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceLogCollectionResponse
 */
class DeviceLogCollectionResponse
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The User Principal Name (UPN) of the user that enrolled the device. */
    public ?string $enrolledByUser = null;

    /** The DateTime of the expiration of the logs. */
    public ?\DateTimeInterface $expirationDateTimeUTC = null;

    /** The UPN for who initiated the request. */
    public ?string $initiatedByUserPrincipalName = null;

    /** Indicates Intune device unique identifier. */
    public ?string $managedDeviceId = null;

    /** The DateTime the request was received. */
    public ?\DateTimeInterface $receivedDateTimeUTC = null;

    /** The DateTime of the request. */
    public ?\DateTimeInterface $requestedDateTimeUTC = null;

    /** 
     * The size of the logs in KB. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $sizeInKB = null;

    /**  */
    public ?AppLogUploadState $status = null;


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
        if (isset($data['enrolledByUser'])) {
            $this->enrolledByUser = $data['enrolledByUser'];
        }
        if (isset($data['expirationDateTimeUTC'])) {
            $this->expirationDateTimeUTC = is_string($data['expirationDateTimeUTC']) ? new \DateTimeImmutable($data['expirationDateTimeUTC']) : $data['expirationDateTimeUTC'];
        }
        if (isset($data['initiatedByUserPrincipalName'])) {
            $this->initiatedByUserPrincipalName = $data['initiatedByUserPrincipalName'];
        }
        if (isset($data['managedDeviceId'])) {
            $this->managedDeviceId = $data['managedDeviceId'];
        }
        if (isset($data['receivedDateTimeUTC'])) {
            $this->receivedDateTimeUTC = is_string($data['receivedDateTimeUTC']) ? new \DateTimeImmutable($data['receivedDateTimeUTC']) : $data['receivedDateTimeUTC'];
        }
        if (isset($data['requestedDateTimeUTC'])) {
            $this->requestedDateTimeUTC = is_string($data['requestedDateTimeUTC']) ? new \DateTimeImmutable($data['requestedDateTimeUTC']) : $data['requestedDateTimeUTC'];
        }
        if (isset($data['sizeInKB'])) {
            $this->sizeInKB = $data['sizeInKB'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new AppLogUploadState($data['status']) : $data['status'];
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

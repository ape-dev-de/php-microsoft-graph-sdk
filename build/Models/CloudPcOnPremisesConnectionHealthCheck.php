<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcOnPremisesConnectionHealthCheck
 */
class CloudPcOnPremisesConnectionHealthCheck
{
    /** Additional details about the health check or the recommended action. For exmaple, the string value can be download.microsoft.com:443;software-download.microsoft.com:443; Read-only. */
    public ?string $additionalDetail = null;

    /** The unique identifier of the health check item-related activities. This identifier can be useful in troubleshooting. */
    public ?string $correlationId = null;

    /** The display name for this health check item. */
    public ?string $displayName = null;

    /** The value cannot be modified and is automatically populated when the health check ends. The Timestamp type represents date and time information using ISO 8601 format and is in Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2024 would look like this: '2024-01-01T00:00:00Z'. Returned by default. Read-only. */
    public ?\DateTimeInterface $endDateTime = null;

    /** 
     * The type of error that occurred during this health check. Possible values are: endpointConnectivityCheckCloudPcUrlNotAllowListed, endpointConnectivityCheckWVDUrlNotAllowListed, etc. (The all possible values can refer to cloudPcOnPremisesConnectionHealthCheckErrorType) Read-Only.
     * @var CloudPcOnPremisesConnectionHealthCheckErrorType|\stdClass|null
     */
    public mixed $errorType = null;

    /** The recommended action to fix the corresponding error. For example, The Active Directory domain join check failed because the password of the domain join user has expired. Read-Only. */
    public ?string $recommendedAction = null;

    /** The value cannot be modified and is automatically populated when the health check starts. The Timestamp type represents date and time information using ISO 8601 format and is in  Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2024 would look like this: '2024-01-01T00:00:00Z'. Returned by default. Read-only. */
    public ?\DateTimeInterface $startDateTime = null;

    /**  */
    public ?CloudPcOnPremisesConnectionStatus $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['additionalDetail'])) {
            $this->additionalDetail = $data['additionalDetail'];
        }
        if (isset($data['correlationId'])) {
            $this->correlationId = $data['correlationId'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['endDateTime'])) {
            $this->endDateTime = is_string($data['endDateTime']) ? new \DateTimeImmutable($data['endDateTime']) : $data['endDateTime'];
        }
        if (isset($data['errorType'])) {
            $this->errorType = is_array($data['errorType']) ? new CloudPcOnPremisesConnectionHealthCheckErrorType($data['errorType']) : $data['errorType'];
        }
        if (isset($data['recommendedAction'])) {
            $this->recommendedAction = $data['recommendedAction'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_string($data['startDateTime']) ? new \DateTimeImmutable($data['startDateTime']) : $data['startDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new CloudPcOnPremisesConnectionStatus($data['status']) : $data['status'];
        }
    }
}

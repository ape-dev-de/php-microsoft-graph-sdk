<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsAppHealthDevicePerformance
 */
class UserExperienceAnalyticsAppHealthDevicePerformance
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The number of application crashes for the device. Valid values 0 to 2147483647. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $appCrashCount = null;

    /** The number of application hangs for the device. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $appHangCount = null;

    /** The number of distinct application crashes for the device. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $crashedAppCount = null;

    /** The application health score of the device. Valid values 0 to 100. Supports: $filter, $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    public ?string $deviceAppHealthScore = null;

    /** The name of the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $deviceDisplayName = null;

    /** The Intune device id of the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $deviceId = null;

    /** The manufacturer name of the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $deviceManufacturer = null;

    /** The model name of the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $deviceModel = null;

    /**  */
    public ?UserExperienceAnalyticsHealthState $healthStatus = null;

    /** The mean time to failure for the application in minutes. Valid values 0 to 2147483647. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $meanTimeToFailureInMinutes = null;

    /** The date and time when the statistics were last computed. The value cannot be modified and is automatically populated when the statistics are computed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2022 would look like this: '2022-01-01T00:00:00Z'. Returned by default. Read-only. */
    public ?\DateTimeInterface $processedDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['appCrashCount'])) {
            $this->appCrashCount = $data['appCrashCount'];
        }
        if (isset($data['appHangCount'])) {
            $this->appHangCount = $data['appHangCount'];
        }
        if (isset($data['crashedAppCount'])) {
            $this->crashedAppCount = $data['crashedAppCount'];
        }
        if (isset($data['deviceAppHealthScore'])) {
            $this->deviceAppHealthScore = $data['deviceAppHealthScore'];
        }
        if (isset($data['deviceDisplayName'])) {
            $this->deviceDisplayName = $data['deviceDisplayName'];
        }
        if (isset($data['deviceId'])) {
            $this->deviceId = $data['deviceId'];
        }
        if (isset($data['deviceManufacturer'])) {
            $this->deviceManufacturer = $data['deviceManufacturer'];
        }
        if (isset($data['deviceModel'])) {
            $this->deviceModel = $data['deviceModel'];
        }
        if (isset($data['healthStatus'])) {
            $this->healthStatus = is_array($data['healthStatus']) ? new UserExperienceAnalyticsHealthState($data['healthStatus']) : $data['healthStatus'];
        }
        if (isset($data['meanTimeToFailureInMinutes'])) {
            $this->meanTimeToFailureInMinutes = $data['meanTimeToFailureInMinutes'];
        }
        if (isset($data['processedDateTime'])) {
            $this->processedDateTime = is_string($data['processedDateTime']) ? new \DateTimeImmutable($data['processedDateTime']) : $data['processedDateTime'];
        }
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId
 */
class UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The number of crashes for the app. Valid values -2147483648 to 2147483647 */
    public ?float $appCrashCount = null;

    /** The friendly name of the application. */
    public ?string $appDisplayName = null;

    /** The name of the application. */
    public ?string $appName = null;

    /** The publisher of the application. */
    public ?string $appPublisher = null;

    /** The version of the application. */
    public ?string $appVersion = null;

    /** The name of the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $deviceDisplayName = null;

    /** The Intune device id of the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $deviceId = null;

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
        if (isset($data['appDisplayName'])) {
            $this->appDisplayName = $data['appDisplayName'];
        }
        if (isset($data['appName'])) {
            $this->appName = $data['appName'];
        }
        if (isset($data['appPublisher'])) {
            $this->appPublisher = $data['appPublisher'];
        }
        if (isset($data['appVersion'])) {
            $this->appVersion = $data['appVersion'];
        }
        if (isset($data['deviceDisplayName'])) {
            $this->deviceDisplayName = $data['deviceDisplayName'];
        }
        if (isset($data['deviceId'])) {
            $this->deviceId = $data['deviceId'];
        }
        if (isset($data['processedDateTime'])) {
            $this->processedDateTime = $data['processedDateTime'];
        }
    }
}

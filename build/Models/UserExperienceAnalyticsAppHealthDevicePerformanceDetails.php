<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsAppHealthDevicePerformanceDetails
 */
class UserExperienceAnalyticsAppHealthDevicePerformanceDetails
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The friendly name of the application for which the event occurred. Possible values are: outlook.exe, excel.exe. Supports: $select, $OrderBy. Read-only. */
    public ?string $appDisplayName = null;

    /** The publisher of the application. Supports: $select, $OrderBy. Read-only. */
    public ?string $appPublisher = null;

    /** The version of the application. Possible values are: 1.0.0.1, 75.65.23.9. Supports: $select, $OrderBy. Read-only. */
    public ?string $appVersion = null;

    /** The name of the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $deviceDisplayName = null;

    /** The Intune device id of the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $deviceId = null;

    /** The time the event occurred. The value cannot be modified and is automatically populated when the statistics are computed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2022 would look like this: '2022-01-01T00:00:00Z'. Returned by default. Read-only. */
    public ?\DateTimeInterface $eventDateTime = null;

    /** The type of the event. Supports: $select, $OrderBy. Read-only. */
    public ?string $eventType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['appDisplayName'])) {
            $this->appDisplayName = $data['appDisplayName'];
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
        if (isset($data['eventDateTime'])) {
            $this->eventDateTime = is_string($data['eventDateTime']) ? new \DateTimeImmutable($data['eventDateTime']) : $data['eventDateTime'];
        }
        if (isset($data['eventType'])) {
            $this->eventType = $data['eventType'];
        }
    }
}

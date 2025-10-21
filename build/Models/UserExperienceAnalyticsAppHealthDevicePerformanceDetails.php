<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsAppHealthDevicePerformanceDetails
 */
class UserExperienceAnalyticsAppHealthDevicePerformanceDetails
{
    /**
     * The friendly name of the application for which the event occurred. Possible values are: outlook.exe, excel.exe. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $appDisplayName;

    /**
     * The publisher of the application. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $appPublisher;

    /**
     * The version of the application. Possible values are: 1.0.0.1, 75.65.23.9. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $appVersion;

    /**
     * The name of the device. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $deviceDisplayName;

    /**
     * The Intune device id of the device. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $deviceId;

    /**
     * The time the event occurred. The value cannot be modified and is automatically populated when the statistics are computed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2022 would look like this: ''2022-01-01T00:00:00Z''. Returned by default. Read-only.
     */
    private ?\DateTimeInterface $eventDateTime;

    /**
     * The user experience analytics device performance entity contains device performance details.
     */
    private ?string $eventType;


    public function getAppDisplayName(): ?string
    {
        return $this->appDisplayName;
    }

    public function setAppDisplayName(?string $appDisplayName): self
    {
        $this->appDisplayName = $appDisplayName;
        return $this;
    }

    public function getAppPublisher(): ?string
    {
        return $this->appPublisher;
    }

    public function setAppPublisher(?string $appPublisher): self
    {
        $this->appPublisher = $appPublisher;
        return $this;
    }

    public function getAppVersion(): ?string
    {
        return $this->appVersion;
    }

    public function setAppVersion(?string $appVersion): self
    {
        $this->appVersion = $appVersion;
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

    public function getEventDateTime(): ?\DateTimeInterface
    {
        return $this->eventDateTime;
    }

    public function setEventDateTime(?\DateTimeInterface $eventDateTime): self
    {
        $this->eventDateTime = $eventDateTime;
        return $this;
    }

    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    public function setEventType(?string $eventType): self
    {
        $this->eventType = $eventType;
        return $this;
    }

}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId
 */
class UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId
{
    /**
     * The number of crashes for the app. Valid values -2147483648 to 2147483647
     */
    private ?float $appCrashCount;

    /**
     * The friendly name of the application.
     */
    private ?string $appDisplayName;

    /**
     * The name of the application.
     */
    private ?string $appName;

    /**
     * The publisher of the application.
     */
    private ?string $appPublisher;

    /**
     * The version of the application.
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
     * The user experience analytics application performance entity contains application performance by application version device id.
     */
    private ?\DateTimeInterface $processedDateTime;

    public function getAppCrashCount(): ?float
    {
        return $this->appCrashCount;
    }

    public function setAppCrashCount(?float $appCrashCount): self
    {
        $this->appCrashCount = $appCrashCount;
        return $this;
    }

    public function getAppDisplayName(): ?string
    {
        return $this->appDisplayName;
    }

    public function setAppDisplayName(?string $appDisplayName): self
    {
        $this->appDisplayName = $appDisplayName;
        return $this;
    }

    public function getAppName(): ?string
    {
        return $this->appName;
    }

    public function setAppName(?string $appName): self
    {
        $this->appName = $appName;
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

    public function getProcessedDateTime(): ?\DateTimeInterface
    {
        return $this->processedDateTime;
    }

    public function setProcessedDateTime(?\DateTimeInterface $processedDateTime): self
    {
        $this->processedDateTime = $processedDateTime;
        return $this;
    }

}

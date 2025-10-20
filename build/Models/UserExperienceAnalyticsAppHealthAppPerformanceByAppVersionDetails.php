<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails
 */
class UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails
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
     * The total number of devices that have reported one or more application crashes for this application and version. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
     */
    private ?float $deviceCountWithCrashes;

    /**
     * When TRUE, indicates the version of application is the latest version for that application that is in use. When FALSE, indicates the version is not the latest version. FALSE by default. Supports: $select, $OrderBy.
     */
    private ?bool $isLatestUsedVersion;

    /**
     * The user experience analytics application performance entity contains application performance by application version details.
     */
    private ?string $isMostUsedVersion;

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

    public function getDeviceCountWithCrashes(): ?float
    {
        return $this->deviceCountWithCrashes;
    }

    public function setDeviceCountWithCrashes(?float $deviceCountWithCrashes): self
    {
        $this->deviceCountWithCrashes = $deviceCountWithCrashes;
        return $this;
    }

    public function getIsLatestUsedVersion(): ?bool
    {
        return $this->isLatestUsedVersion;
    }

    public function setIsLatestUsedVersion(?bool $isLatestUsedVersion): self
    {
        $this->isLatestUsedVersion = $isLatestUsedVersion;
        return $this;
    }

    public function getIsMostUsedVersion(): ?string
    {
        return $this->isMostUsedVersion;
    }

    public function setIsMostUsedVersion(?string $isMostUsedVersion): self
    {
        $this->isMostUsedVersion = $isMostUsedVersion;
        return $this;
    }

}

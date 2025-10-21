<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion
 */
class UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion
{
    /**
     * The number of devices where the application has been active. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
     */
    private ?float $activeDeviceCount;

    /**
     * The number of crashes for the application. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
     */
    private ?float $appCrashCount;

    /**
     * The friendly name of the application. Possible values are: Outlook, Excel. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $appDisplayName;

    /**
     * The name of the application. Possible values are: outlook.exe, excel.exe. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $appName;

    /**
     * The publisher of the application. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $appPublisher;

    /**
     * The total usage time of the application in minutes. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
     */
    private ?float $appUsageDuration;

    /**
     * The mean time to failure for the application in minutes. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
     */
    private ?float $meanTimeToFailureInMinutes;

    /**
     * The OS build number of the application. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $osBuildNumber;

    /**
     * The user experience analytics application performance entity contains app performance details by OS version.
     */
    private ?string $osVersion;


    public function getActiveDeviceCount(): ?float
    {
        return $this->activeDeviceCount;
    }

    public function setActiveDeviceCount(?float $activeDeviceCount): self
    {
        $this->activeDeviceCount = $activeDeviceCount;
        return $this;
    }

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

    public function getAppUsageDuration(): ?float
    {
        return $this->appUsageDuration;
    }

    public function setAppUsageDuration(?float $appUsageDuration): self
    {
        $this->appUsageDuration = $appUsageDuration;
        return $this;
    }

    public function getMeanTimeToFailureInMinutes(): ?float
    {
        return $this->meanTimeToFailureInMinutes;
    }

    public function setMeanTimeToFailureInMinutes(?float $meanTimeToFailureInMinutes): self
    {
        $this->meanTimeToFailureInMinutes = $meanTimeToFailureInMinutes;
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

    public function getOsVersion(): ?string
    {
        return $this->osVersion;
    }

    public function setOsVersion(?string $osVersion): self
    {
        $this->osVersion = $osVersion;
        return $this;
    }

}

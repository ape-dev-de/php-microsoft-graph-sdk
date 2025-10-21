<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsAppHealthApplicationPerformance
 */
class UserExperienceAnalyticsAppHealthApplicationPerformance
{
    /**
     * The health score of the application. Valid values 0 to 100. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
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
     * The number of hangs for the application. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
     */
    private ?float $appHangCount;

    /**
     * The health score of the application. Valid values 0 to 100. Supports: $filter, $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     */
    private ?string $appHealthScore;

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
     * The user experience analytics application performance entity contains application performance details.
     */
    private ?string $meanTimeToFailureInMinutes;


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

    public function getAppHangCount(): ?float
    {
        return $this->appHangCount;
    }

    public function setAppHangCount(?float $appHangCount): self
    {
        $this->appHangCount = $appHangCount;
        return $this;
    }

    public function getAppHealthScore(): ?string
    {
        return $this->appHealthScore;
    }

    public function setAppHealthScore(?string $appHealthScore): self
    {
        $this->appHealthScore = $appHealthScore;
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

    public function getMeanTimeToFailureInMinutes(): ?string
    {
        return $this->meanTimeToFailureInMinutes;
    }

    public function setMeanTimeToFailureInMinutes(?string $meanTimeToFailureInMinutes): self
    {
        $this->meanTimeToFailureInMinutes = $meanTimeToFailureInMinutes;
        return $this;
    }

}

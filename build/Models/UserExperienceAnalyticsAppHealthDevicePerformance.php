<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsAppHealthDevicePerformance
 */
class UserExperienceAnalyticsAppHealthDevicePerformance
{
    /**
     * The number of application crashes for the device. Valid values 0 to 2147483647. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
     */
    private ?float $appCrashCount;

    /**
     * The number of application hangs for the device. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
     */
    private ?float $appHangCount;

    /**
     * The number of distinct application crashes for the device. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
     */
    private ?float $crashedAppCount;

    /**
     * The application health score of the device. Valid values 0 to 100. Supports: $filter, $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     */
    private ?string $deviceAppHealthScore;

    /**
     * The name of the device. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $deviceDisplayName;

    /**
     * The Intune device id of the device. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $deviceId;

    /**
     * The manufacturer name of the device. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $deviceManufacturer;

    /**
     * The model name of the device. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $deviceModel;

    /**
     */
    private ?string $healthStatus;

    /**
     * The mean time to failure for the application in minutes. Valid values 0 to 2147483647. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
     */
    private ?float $meanTimeToFailureInMinutes;

    /**
     * The user experience analytics device performance entity contains device performance details.
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

    public function getAppHangCount(): ?float
    {
        return $this->appHangCount;
    }

    public function setAppHangCount(?float $appHangCount): self
    {
        $this->appHangCount = $appHangCount;
        return $this;
    }

    public function getCrashedAppCount(): ?float
    {
        return $this->crashedAppCount;
    }

    public function setCrashedAppCount(?float $crashedAppCount): self
    {
        $this->crashedAppCount = $crashedAppCount;
        return $this;
    }

    public function getDeviceAppHealthScore(): ?string
    {
        return $this->deviceAppHealthScore;
    }

    public function setDeviceAppHealthScore(?string $deviceAppHealthScore): self
    {
        $this->deviceAppHealthScore = $deviceAppHealthScore;
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

    public function getDeviceManufacturer(): ?string
    {
        return $this->deviceManufacturer;
    }

    public function setDeviceManufacturer(?string $deviceManufacturer): self
    {
        $this->deviceManufacturer = $deviceManufacturer;
        return $this;
    }

    public function getDeviceModel(): ?string
    {
        return $this->deviceModel;
    }

    public function setDeviceModel(?string $deviceModel): self
    {
        $this->deviceModel = $deviceModel;
        return $this;
    }

    public function getHealthStatus(): ?string
    {
        return $this->healthStatus;
    }

    public function setHealthStatus(?string $healthStatus): self
    {
        $this->healthStatus = $healthStatus;
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

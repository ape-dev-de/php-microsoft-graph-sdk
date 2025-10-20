<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsDevicePerformance
 */
class UserExperienceAnalyticsDevicePerformance
{
    /**
     * Average (mean) number of Blue Screens per device in the last 30 days. Valid values 0 to 9999999
     */
    private ?string $averageBlueScreens;

    /**
     * Average (mean) number of Restarts per device in the last 30 days. Valid values 0 to 9999999
     */
    private ?string $averageRestarts;

    /**
     * Number of Blue Screens in the last 30 days. Valid values 0 to 9999999
     */
    private ?float $blueScreenCount;

    /**
     * The user experience analytics device boot score.
     */
    private ?float $bootScore;

    /**
     * The user experience analytics device core boot time in milliseconds.
     */
    private ?float $coreBootTimeInMs;

    /**
     * The user experience analytics device core login time in milliseconds.
     */
    private ?float $coreLoginTimeInMs;

    /**
     * User experience analytics summarized device count.
     */
    private ?float $deviceCount;

    /**
     * The user experience analytics device name.
     */
    private ?string $deviceName;

    /**
     */
    private ?string $diskType;

    /**
     * The user experience analytics device group policy boot time in milliseconds.
     */
    private ?float $groupPolicyBootTimeInMs;

    /**
     * The user experience analytics device group policy login time in milliseconds.
     */
    private ?float $groupPolicyLoginTimeInMs;

    /**
     */
    private ?string $healthStatus;

    /**
     * The user experience analytics device login score.
     */
    private ?float $loginScore;

    /**
     * The user experience analytics device manufacturer.
     */
    private ?string $manufacturer;

    /**
     * The user experience analytics device model.
     */
    private ?string $model;

    /**
     * The user experience analytics model level startup performance score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     */
    private ?string $modelStartupPerformanceScore;

    /**
     * The user experience analytics device Operating System version.
     */
    private ?string $operatingSystemVersion;

    /**
     * The user experience analytics responsive desktop time in milliseconds.
     */
    private ?float $responsiveDesktopTimeInMs;

    /**
     * Number of Restarts in the last 30 days. Valid values 0 to 9999999
     */
    private ?float $restartCount;

    /**
     * The user experience analytics device performance entity contains device boot performance details.
     */
    private ?string $startupPerformanceScore;

    public function getAverageBlueScreens(): ?string
    {
        return $this->averageBlueScreens;
    }

    public function setAverageBlueScreens(?string $averageBlueScreens): self
    {
        $this->averageBlueScreens = $averageBlueScreens;
        return $this;
    }

    public function getAverageRestarts(): ?string
    {
        return $this->averageRestarts;
    }

    public function setAverageRestarts(?string $averageRestarts): self
    {
        $this->averageRestarts = $averageRestarts;
        return $this;
    }

    public function getBlueScreenCount(): ?float
    {
        return $this->blueScreenCount;
    }

    public function setBlueScreenCount(?float $blueScreenCount): self
    {
        $this->blueScreenCount = $blueScreenCount;
        return $this;
    }

    public function getBootScore(): ?float
    {
        return $this->bootScore;
    }

    public function setBootScore(?float $bootScore): self
    {
        $this->bootScore = $bootScore;
        return $this;
    }

    public function getCoreBootTimeInMs(): ?float
    {
        return $this->coreBootTimeInMs;
    }

    public function setCoreBootTimeInMs(?float $coreBootTimeInMs): self
    {
        $this->coreBootTimeInMs = $coreBootTimeInMs;
        return $this;
    }

    public function getCoreLoginTimeInMs(): ?float
    {
        return $this->coreLoginTimeInMs;
    }

    public function setCoreLoginTimeInMs(?float $coreLoginTimeInMs): self
    {
        $this->coreLoginTimeInMs = $coreLoginTimeInMs;
        return $this;
    }

    public function getDeviceCount(): ?float
    {
        return $this->deviceCount;
    }

    public function setDeviceCount(?float $deviceCount): self
    {
        $this->deviceCount = $deviceCount;
        return $this;
    }

    public function getDeviceName(): ?string
    {
        return $this->deviceName;
    }

    public function setDeviceName(?string $deviceName): self
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    public function getDiskType(): ?string
    {
        return $this->diskType;
    }

    public function setDiskType(?string $diskType): self
    {
        $this->diskType = $diskType;
        return $this;
    }

    public function getGroupPolicyBootTimeInMs(): ?float
    {
        return $this->groupPolicyBootTimeInMs;
    }

    public function setGroupPolicyBootTimeInMs(?float $groupPolicyBootTimeInMs): self
    {
        $this->groupPolicyBootTimeInMs = $groupPolicyBootTimeInMs;
        return $this;
    }

    public function getGroupPolicyLoginTimeInMs(): ?float
    {
        return $this->groupPolicyLoginTimeInMs;
    }

    public function setGroupPolicyLoginTimeInMs(?float $groupPolicyLoginTimeInMs): self
    {
        $this->groupPolicyLoginTimeInMs = $groupPolicyLoginTimeInMs;
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

    public function getLoginScore(): ?float
    {
        return $this->loginScore;
    }

    public function setLoginScore(?float $loginScore): self
    {
        $this->loginScore = $loginScore;
        return $this;
    }

    public function getManufacturer(): ?string
    {
        return $this->manufacturer;
    }

    public function setManufacturer(?string $manufacturer): self
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): self
    {
        $this->model = $model;
        return $this;
    }

    public function getModelStartupPerformanceScore(): ?string
    {
        return $this->modelStartupPerformanceScore;
    }

    public function setModelStartupPerformanceScore(?string $modelStartupPerformanceScore): self
    {
        $this->modelStartupPerformanceScore = $modelStartupPerformanceScore;
        return $this;
    }

    public function getOperatingSystemVersion(): ?string
    {
        return $this->operatingSystemVersion;
    }

    public function setOperatingSystemVersion(?string $operatingSystemVersion): self
    {
        $this->operatingSystemVersion = $operatingSystemVersion;
        return $this;
    }

    public function getResponsiveDesktopTimeInMs(): ?float
    {
        return $this->responsiveDesktopTimeInMs;
    }

    public function setResponsiveDesktopTimeInMs(?float $responsiveDesktopTimeInMs): self
    {
        $this->responsiveDesktopTimeInMs = $responsiveDesktopTimeInMs;
        return $this;
    }

    public function getRestartCount(): ?float
    {
        return $this->restartCount;
    }

    public function setRestartCount(?float $restartCount): self
    {
        $this->restartCount = $restartCount;
        return $this;
    }

    public function getStartupPerformanceScore(): ?string
    {
        return $this->startupPerformanceScore;
    }

    public function setStartupPerformanceScore(?string $startupPerformanceScore): self
    {
        $this->startupPerformanceScore = $startupPerformanceScore;
        return $this;
    }

}

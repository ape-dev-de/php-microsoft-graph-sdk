<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsAppHealthDeviceModelPerformance
 */
class UserExperienceAnalyticsAppHealthDeviceModelPerformance
{
    /**
     * The number of active devices for the model. Valid values 0 to 2147483647. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
     */
    private ?float $activeDeviceCount;

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
     * The user experience analytics device model performance entity contains device model performance details.
     */
    private ?string $modelAppHealthScore;


    public function getActiveDeviceCount(): ?float
    {
        return $this->activeDeviceCount;
    }

    public function setActiveDeviceCount(?float $activeDeviceCount): self
    {
        $this->activeDeviceCount = $activeDeviceCount;
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

    public function getModelAppHealthScore(): ?string
    {
        return $this->modelAppHealthScore;
    }

    public function setModelAppHealthScore(?string $modelAppHealthScore): self
    {
        $this->modelAppHealthScore = $modelAppHealthScore;
        return $this;
    }

}

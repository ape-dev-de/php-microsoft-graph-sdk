<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsAppHealthOSVersionPerformance
 */
class UserExperienceAnalyticsAppHealthOSVersionPerformance
{
    /**
     * The number of active devices for the OS version. Valid values 0 to 2147483647. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
     */
    private ?float $activeDeviceCount;

    /**
     * The mean time to failure for the application in minutes. Valid values 0 to 2147483647. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
     */
    private ?float $meanTimeToFailureInMinutes;

    /**
     * The OS build number installed on the device. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $osBuildNumber;

    /**
     * The OS version installed on the device. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $osVersion;

    /**
     * The user experience analytics device OS version performance entity contains OS version performance details.
     */
    private ?string $osVersionAppHealthScore;

    public function getActiveDeviceCount(): ?float
    {
        return $this->activeDeviceCount;
    }

    public function setActiveDeviceCount(?float $activeDeviceCount): self
    {
        $this->activeDeviceCount = $activeDeviceCount;
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

    public function getOsVersionAppHealthScore(): ?string
    {
        return $this->osVersionAppHealthScore;
    }

    public function setOsVersionAppHealthScore(?string $osVersionAppHealthScore): self
    {
        $this->osVersionAppHealthScore = $osVersionAppHealthScore;
        return $this;
    }

}

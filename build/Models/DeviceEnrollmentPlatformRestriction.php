<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceEnrollmentPlatformRestriction
 */
class DeviceEnrollmentPlatformRestriction
{
    /**
     * Max OS version supported
     */
    private ?string $osMaximumVersion;

    /**
     * Min OS version supported
     */
    private ?string $osMinimumVersion;

    /**
     * Block personally owned devices from enrolling
     */
    private ?bool $personalDeviceEnrollmentBlocked;

    /**
     * Platform specific enrollment restrictions
     */
    private ?string $platformBlocked;

    public function getOsMaximumVersion(): ?string
    {
        return $this->osMaximumVersion;
    }

    public function setOsMaximumVersion(?string $osMaximumVersion): self
    {
        $this->osMaximumVersion = $osMaximumVersion;
        return $this;
    }

    public function getOsMinimumVersion(): ?string
    {
        return $this->osMinimumVersion;
    }

    public function setOsMinimumVersion(?string $osMinimumVersion): self
    {
        $this->osMinimumVersion = $osMinimumVersion;
        return $this;
    }

    public function getPersonalDeviceEnrollmentBlocked(): ?bool
    {
        return $this->personalDeviceEnrollmentBlocked;
    }

    public function setPersonalDeviceEnrollmentBlocked(?bool $personalDeviceEnrollmentBlocked): self
    {
        $this->personalDeviceEnrollmentBlocked = $personalDeviceEnrollmentBlocked;
        return $this;
    }

    public function getPlatformBlocked(): ?string
    {
        return $this->platformBlocked;
    }

    public function setPlatformBlocked(?string $platformBlocked): self
    {
        $this->platformBlocked = $platformBlocked;
        return $this;
    }

}

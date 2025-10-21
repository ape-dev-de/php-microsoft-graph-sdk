<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceEnrollmentPlatformRestrictionsConfiguration
 */
class DeviceEnrollmentPlatformRestrictionsConfiguration
{
    /**
     * Android restrictions based on platform, platform operating system version, and device ownership
     */
    private ?string $androidRestriction;

    /**
     * Ios restrictions based on platform, platform operating system version, and device ownership
     */
    private ?string $iosRestriction;

    /**
     * Mac restrictions based on platform, platform operating system version, and device ownership
     */
    private ?string $macOSRestriction;

    /**
     * Windows mobile restrictions based on platform, platform operating system version, and device ownership
     */
    private ?string $windowsMobileRestriction;

    /**
     * Default Device Enrollment Platform Restrictions Configuration that restricts the types of devices a user can enroll
     */
    private ?string $windowsRestriction;


    public function getAndroidRestriction(): ?string
    {
        return $this->androidRestriction;
    }

    public function setAndroidRestriction(?string $androidRestriction): self
    {
        $this->androidRestriction = $androidRestriction;
        return $this;
    }

    public function getIosRestriction(): ?string
    {
        return $this->iosRestriction;
    }

    public function setIosRestriction(?string $iosRestriction): self
    {
        $this->iosRestriction = $iosRestriction;
        return $this;
    }

    public function getMacOSRestriction(): ?string
    {
        return $this->macOSRestriction;
    }

    public function setMacOSRestriction(?string $macOSRestriction): self
    {
        $this->macOSRestriction = $macOSRestriction;
        return $this;
    }

    public function getWindowsMobileRestriction(): ?string
    {
        return $this->windowsMobileRestriction;
    }

    public function setWindowsMobileRestriction(?string $windowsMobileRestriction): self
    {
        $this->windowsMobileRestriction = $windowsMobileRestriction;
        return $this;
    }

    public function getWindowsRestriction(): ?string
    {
        return $this->windowsRestriction;
    }

    public function setWindowsRestriction(?string $windowsRestriction): self
    {
        $this->windowsRestriction = $windowsRestriction;
        return $this;
    }

}

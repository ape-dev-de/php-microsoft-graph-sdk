<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsWindows10DevicesSummary
 */
class UserExperienceAnalyticsWindows10DevicesSummary
{
    /**
     * The user experience analytics work from anywhere Windows 10 devices summary.
     */
    private ?string $unsupportedOSversionDeviceCount;


    public function getUnsupportedOSversionDeviceCount(): ?string
    {
        return $this->unsupportedOSversionDeviceCount;
    }

    public function setUnsupportedOSversionDeviceCount(?string $unsupportedOSversionDeviceCount): self
    {
        $this->unsupportedOSversionDeviceCount = $unsupportedOSversionDeviceCount;
        return $this;
    }

}

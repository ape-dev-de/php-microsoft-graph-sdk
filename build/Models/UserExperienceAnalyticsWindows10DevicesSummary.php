<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsWindows10DevicesSummary
 */
class UserExperienceAnalyticsWindows10DevicesSummary
{
    /** The count of Windows 10 devices that have unsupported OS versions. Read-only. */
    public ?float $unsupportedOSversionDeviceCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['unsupportedOSversionDeviceCount'])) {
            $this->unsupportedOSversionDeviceCount = $data['unsupportedOSversionDeviceCount'];
        }
    }
}

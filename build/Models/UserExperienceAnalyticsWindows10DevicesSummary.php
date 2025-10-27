<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsWindows10DevicesSummary
 */
class UserExperienceAnalyticsWindows10DevicesSummary
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The count of Windows 10 devices that have unsupported OS versions. Read-only. */
    public ?float $unsupportedOSversionDeviceCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['unsupportedOSversionDeviceCount'])) {
            $this->unsupportedOSversionDeviceCount = is_numeric($data['unsupportedOSversionDeviceCount']) ? (float)$data['unsupportedOSversionDeviceCount'] : $data['unsupportedOSversionDeviceCount'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}

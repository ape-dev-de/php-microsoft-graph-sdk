<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsCloudIdentityDevicesSummary
 */
class UserExperienceAnalyticsCloudIdentityDevicesSummary
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The count of devices that are not cloud identity. Read-only. */
    public ?float $deviceWithoutCloudIdentityCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['deviceWithoutCloudIdentityCount'])) {
            $this->deviceWithoutCloudIdentityCount = $data['deviceWithoutCloudIdentityCount'];
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

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsCloudIdentityDevicesSummary
 */
class UserExperienceAnalyticsCloudIdentityDevicesSummary
{
    /** The count of devices that are not cloud identity. Read-only. */
    public ?float $deviceWithoutCloudIdentityCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['deviceWithoutCloudIdentityCount'])) {
            $this->deviceWithoutCloudIdentityCount = $data['deviceWithoutCloudIdentityCount'];
        }
    }
}

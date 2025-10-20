<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsCloudIdentityDevicesSummary
 */
class UserExperienceAnalyticsCloudIdentityDevicesSummary
{
    /**
     * The user experience analytics work from anywhere cloud identity devices summary.
     */
    private ?string $deviceWithoutCloudIdentityCount;

    public function getDeviceWithoutCloudIdentityCount(): ?string
    {
        return $this->deviceWithoutCloudIdentityCount;
    }

    public function setDeviceWithoutCloudIdentityCount(?string $deviceWithoutCloudIdentityCount): self
    {
        $this->deviceWithoutCloudIdentityCount = $deviceWithoutCloudIdentityCount;
        return $this;
    }

}

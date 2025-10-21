<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsCloudManagementDevicesSummary
 */
class UserExperienceAnalyticsCloudManagementDevicesSummary
{
    public function __construct(
        /** Total number of  co-managed devices. Read-only. */
        public ?float $coManagedDeviceCount = null,
        /** The count of intune devices that are not autopilot registerd. Read-only. */
        public ?float $intuneDeviceCount = null,
        /** The user experience work from anywhere Cloud management devices summary. */
        public ?string $tenantAttachDeviceCount = null
    ) {}
}

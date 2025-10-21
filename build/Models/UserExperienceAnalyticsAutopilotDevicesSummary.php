<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsAutopilotDevicesSummary
 */
class UserExperienceAnalyticsAutopilotDevicesSummary
{
    public function __construct(
        /** The count of intune devices that are not autopilot registerd. Read-only. */
        public ?float $devicesNotAutopilotRegistered = null,
        /** The count of intune devices not autopilot profile assigned. Read-only. */
        public ?float $devicesWithoutAutopilotProfileAssigned = null,
        /** The count of windows 10 devices that are Intune and co-managed. Read-only. */
        public ?float $totalWindows10DevicesWithoutTenantAttached = null
    ) {}
}

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
        /** The user experience analytics summary of Devices not windows autopilot ready. */
        public ?string $totalWindows10DevicesWithoutTenantAttached = null
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsAutopilotDevicesSummary resources
 *
 * Available select fields:
 * - devicesNotAutopilotRegistered
 * - devicesWithoutAutopilotProfileAssigned
 * - totalWindows10DevicesWithoutTenantAttached
 */
class UserExperienceAnalyticsAutopilotDevicesSummaryQueryOptions extends QueryOptions
{
    public const FIELD_DEVICES_NOT_AUTOPILOT_REGISTERED = 'devicesNotAutopilotRegistered';
    public const FIELD_DEVICES_WITHOUT_AUTOPILOT_PROFILE_ASSIGNED = 'devicesWithoutAutopilotProfileAssigned';
    public const FIELD_TOTAL_WINDOWS10DEVICES_WITHOUT_TENANT_ATTACHED = 'totalWindows10DevicesWithoutTenantAttached';

    /**
     * Select specific UserExperienceAnalyticsAutopilotDevicesSummary properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsAutopilotDevicesSummaryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

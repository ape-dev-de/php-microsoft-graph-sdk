<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsAutopilotDevicesSummary
 */
class UserExperienceAnalyticsAutopilotDevicesSummary
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The count of intune devices that are not autopilot registerd. Read-only. */
    public ?float $devicesNotAutopilotRegistered = null;

    /** The count of intune devices not autopilot profile assigned. Read-only. */
    public ?float $devicesWithoutAutopilotProfileAssigned = null;

    /** The count of windows 10 devices that are Intune and co-managed. Read-only. */
    public ?float $totalWindows10DevicesWithoutTenantAttached = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['devicesNotAutopilotRegistered'])) {
            $this->devicesNotAutopilotRegistered = is_numeric($data['devicesNotAutopilotRegistered']) ? (float)$data['devicesNotAutopilotRegistered'] : $data['devicesNotAutopilotRegistered'];
        }
        if (isset($data['devicesWithoutAutopilotProfileAssigned'])) {
            $this->devicesWithoutAutopilotProfileAssigned = is_numeric($data['devicesWithoutAutopilotProfileAssigned']) ? (float)$data['devicesWithoutAutopilotProfileAssigned'] : $data['devicesWithoutAutopilotProfileAssigned'];
        }
        if (isset($data['totalWindows10DevicesWithoutTenantAttached'])) {
            $this->totalWindows10DevicesWithoutTenantAttached = is_numeric($data['totalWindows10DevicesWithoutTenantAttached']) ? (float)$data['totalWindows10DevicesWithoutTenantAttached'] : $data['totalWindows10DevicesWithoutTenantAttached'];
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

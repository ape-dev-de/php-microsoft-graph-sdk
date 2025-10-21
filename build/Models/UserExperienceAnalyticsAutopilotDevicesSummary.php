<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsAutopilotDevicesSummary
 */
class UserExperienceAnalyticsAutopilotDevicesSummary
{
    /**
     * The count of intune devices that are not autopilot registerd. Read-only.
     */
    private ?float $devicesNotAutopilotRegistered;

    /**
     * The count of intune devices not autopilot profile assigned. Read-only.
     */
    private ?float $devicesWithoutAutopilotProfileAssigned;

    /**
     * The user experience analytics summary of Devices not windows autopilot ready.
     */
    private ?string $totalWindows10DevicesWithoutTenantAttached;


    public function getDevicesNotAutopilotRegistered(): ?float
    {
        return $this->devicesNotAutopilotRegistered;
    }

    public function setDevicesNotAutopilotRegistered(?float $devicesNotAutopilotRegistered): self
    {
        $this->devicesNotAutopilotRegistered = $devicesNotAutopilotRegistered;
        return $this;
    }

    public function getDevicesWithoutAutopilotProfileAssigned(): ?float
    {
        return $this->devicesWithoutAutopilotProfileAssigned;
    }

    public function setDevicesWithoutAutopilotProfileAssigned(?float $devicesWithoutAutopilotProfileAssigned): self
    {
        $this->devicesWithoutAutopilotProfileAssigned = $devicesWithoutAutopilotProfileAssigned;
        return $this;
    }

    public function getTotalWindows10DevicesWithoutTenantAttached(): ?string
    {
        return $this->totalWindows10DevicesWithoutTenantAttached;
    }

    public function setTotalWindows10DevicesWithoutTenantAttached(?string $totalWindows10DevicesWithoutTenantAttached): self
    {
        $this->totalWindows10DevicesWithoutTenantAttached = $totalWindows10DevicesWithoutTenantAttached;
        return $this;
    }

}

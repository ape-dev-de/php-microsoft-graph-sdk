<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsCloudManagementDevicesSummary
 */
class UserExperienceAnalyticsCloudManagementDevicesSummary
{
    /**
     * Total number of  co-managed devices. Read-only.
     */
    private ?float $coManagedDeviceCount;

    /**
     * The count of intune devices that are not autopilot registerd. Read-only.
     */
    private ?float $intuneDeviceCount;

    /**
     * The user experience work from anywhere Cloud management devices summary.
     */
    private ?string $tenantAttachDeviceCount;

    public function getCoManagedDeviceCount(): ?float
    {
        return $this->coManagedDeviceCount;
    }

    public function setCoManagedDeviceCount(?float $coManagedDeviceCount): self
    {
        $this->coManagedDeviceCount = $coManagedDeviceCount;
        return $this;
    }

    public function getIntuneDeviceCount(): ?float
    {
        return $this->intuneDeviceCount;
    }

    public function setIntuneDeviceCount(?float $intuneDeviceCount): self
    {
        $this->intuneDeviceCount = $intuneDeviceCount;
        return $this;
    }

    public function getTenantAttachDeviceCount(): ?string
    {
        return $this->tenantAttachDeviceCount;
    }

    public function setTenantAttachDeviceCount(?string $tenantAttachDeviceCount): self
    {
        $this->tenantAttachDeviceCount = $tenantAttachDeviceCount;
        return $this;
    }

}

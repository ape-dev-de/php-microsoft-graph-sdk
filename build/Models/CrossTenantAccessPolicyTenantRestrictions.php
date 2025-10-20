<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicyTenantRestrictions
 */
class CrossTenantAccessPolicyTenantRestrictions
{
    /**
     * Defines the rule for filtering devices and whether devices that satisfy the rule should be allowed or blocked. This property isn't supported on the server side yet.
     */
    private ?string $devices;

    public function getDevices(): ?string
    {
        return $this->devices;
    }

    public function setDevices(?string $devices): self
    {
        $this->devices = $devices;
        return $this;
    }

}

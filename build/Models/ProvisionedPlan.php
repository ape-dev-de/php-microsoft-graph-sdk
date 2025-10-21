<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProvisionedPlan
 */
class ProvisionedPlan
{
    /**
     * Condition of the capability assignment. The possible values are Enabled, Warning, Suspended, Deleted, LockedOut. See a detailed description of each value.
     */
    private ?string $capabilityStatus;

    /**
     * The possible values are:Success - Service is fully provisioned.Disabled - Service is disabled.Error - The service plan isn''t provisioned and is in an error state.PendingInput - The service isn''t provisioned and is awaiting service confirmation.PendingActivation - The service is provisioned but requires explicit activation by an administrator (for example, Intune_O365 service plan)PendingProvisioning - Microsoft has added a new service to the product SKU and it isn''t activated in the tenant.
     */
    private ?string $provisioningStatus;

    /**
     * The name of the service; for example, ''AccessControlS2S''.
     */
    private ?string $service;


    public function getCapabilityStatus(): ?string
    {
        return $this->capabilityStatus;
    }

    public function setCapabilityStatus(?string $capabilityStatus): self
    {
        $this->capabilityStatus = $capabilityStatus;
        return $this;
    }

    public function getProvisioningStatus(): ?string
    {
        return $this->provisioningStatus;
    }

    public function setProvisioningStatus(?string $provisioningStatus): self
    {
        $this->provisioningStatus = $provisioningStatus;
        return $this;
    }

    public function getService(): ?string
    {
        return $this->service;
    }

    public function setService(?string $service): self
    {
        $this->service = $service;
        return $this;
    }

}

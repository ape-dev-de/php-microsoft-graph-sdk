<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServicePlanInfo
 */
class ServicePlanInfo
{
    /**
     * The object the service plan can be assigned to. The possible values are:User - service plan can be assigned to individual users.Company - service plan can be assigned to the entire tenant.
     */
    private ?string $appliesTo;

    /**
     * The provisioning status of the service plan. The possible values are:Success - Service is fully provisioned.Disabled - Service is disabled.Error - The service plan isn''t provisioned and is in an error state.PendingInput - The service isn''t provisioned and is awaiting service confirmation.PendingActivation - The service is provisioned but requires explicit activation by an administrator (for example, Intune_O365 service plan)PendingProvisioning - Microsoft has added a new service to the product SKU and it isn''t activated in the tenant.
     */
    private ?string $provisioningStatus;

    /**
     * The unique identifier of the service plan.
     */
    private ?string $servicePlanId;

    /**
     * The name of the service plan.
     */
    private ?string $servicePlanName;

    public function getAppliesTo(): ?string
    {
        return $this->appliesTo;
    }

    public function setAppliesTo(?string $appliesTo): self
    {
        $this->appliesTo = $appliesTo;
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

    public function getServicePlanId(): ?string
    {
        return $this->servicePlanId;
    }

    public function setServicePlanId(?string $servicePlanId): self
    {
        $this->servicePlanId = $servicePlanId;
        return $this;
    }

    public function getServicePlanName(): ?string
    {
        return $this->servicePlanName;
    }

    public function setServicePlanName(?string $servicePlanName): self
    {
        $this->servicePlanName = $servicePlanName;
        return $this;
    }

}

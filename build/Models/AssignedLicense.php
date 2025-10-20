<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AssignedLicense
 */
class AssignedLicense
{
    /**
     * A collection of the unique identifiers for plans that have been disabled. IDs are available in servicePlans > servicePlanId in the tenant's subscribedSkus or serviceStatus > servicePlanId in the tenant's companySubscription.
     */
    private ?string $disabledPlans;

    /**
     * The unique identifier for the SKU. Corresponds to the skuId from subscribedSkus or companySubscription.
     */
    private ?string $skuId;

    public function getDisabledPlans(): ?string
    {
        return $this->disabledPlans;
    }

    public function setDisabledPlans(?string $disabledPlans): self
    {
        $this->disabledPlans = $disabledPlans;
        return $this;
    }

    public function getSkuId(): ?string
    {
        return $this->skuId;
    }

    public function setSkuId(?string $skuId): self
    {
        $this->skuId = $skuId;
        return $this;
    }

}

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
     * @var string[]
     */
    private array $disabledPlans = [];

    /**
     * The unique identifier for the SKU. Corresponds to the skuId from subscribedSkus or companySubscription.
     */
    private ?string $skuId;


    /**
     * @return string[]
     */
    public function getDisabledPlans(): array
    {
        return $this->disabledPlans;
    }

    /**
     * @param string[] $disabledPlans
     */
    public function setDisabledPlans(array $disabledPlans): self
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

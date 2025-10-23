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
    public array $disabledPlans = [];

    /** The unique identifier for the SKU. Corresponds to the skuId from subscribedSkus or companySubscription. */
    public ?string $skuId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['disabledPlans'])) {
            $this->disabledPlans = $data['disabledPlans'];
        }
        if (isset($data['skuId'])) {
            $this->skuId = $data['skuId'];
        }
    }
}

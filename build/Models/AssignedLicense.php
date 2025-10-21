<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AssignedLicense
 */
class AssignedLicense
{
    public function __construct(
        /** @var string[] A collection of the unique identifiers for plans that have been disabled. IDs are available in servicePlans > servicePlanId in the tenant's subscribedSkus or serviceStatus > servicePlanId in the tenant's companySubscription. */
        public array $disabledPlans = [],
        /** The unique identifier for the SKU. Corresponds to the skuId from subscribedSkus or companySubscription. */
        public ?string $skuId = null
    ) {}
}

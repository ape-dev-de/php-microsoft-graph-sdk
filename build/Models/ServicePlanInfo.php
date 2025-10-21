<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServicePlanInfo
 */
class ServicePlanInfo
{
    public function __construct(
        /** The object the service plan can be assigned to. The possible values are:User - service plan can be assigned to individual users.Company - service plan can be assigned to the entire tenant. */
        public ?string $appliesTo = null,
        /** The provisioning status of the service plan. The possible values are:Success - Service is fully provisioned.Disabled - Service is disabled.Error - The service plan isn't provisioned and is in an error state.PendingInput - The service isn't provisioned and is awaiting service confirmation.PendingActivation - The service is provisioned but requires explicit activation by an administrator (for example, Intune_O365 service plan)PendingProvisioning - Microsoft has added a new service to the product SKU and it isn't activated in the tenant. */
        public ?string $provisioningStatus = null,
        /** The unique identifier of the service plan. */
        public ?string $servicePlanId = null,
        /** The name of the service plan. */
        public ?string $servicePlanName = null
    ) {}
}

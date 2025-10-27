<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProvisionedPlan
 */
class ProvisionedPlan
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Condition of the capability assignment. The possible values are Enabled, Warning, Suspended, Deleted, LockedOut. See a detailed description of each value. */
    public ?string $capabilityStatus = null;

    /** The possible values are:Success - Service is fully provisioned.Disabled - Service is disabled.Error - The service plan isn't provisioned and is in an error state.PendingInput - The service isn't provisioned and is awaiting service confirmation.PendingActivation - The service is provisioned but requires explicit activation by an administrator (for example, Intune_O365 service plan)PendingProvisioning - Microsoft has added a new service to the product SKU and it isn't activated in the tenant. */
    public ?string $provisioningStatus = null;

    /** The name of the service; for example, 'AccessControlS2S'. */
    public ?string $service = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['capabilityStatus'])) {
            $this->capabilityStatus = $data['capabilityStatus'];
        }
        if (isset($data['provisioningStatus'])) {
            $this->provisioningStatus = $data['provisioningStatus'];
        }
        if (isset($data['service'])) {
            $this->service = $data['service'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}

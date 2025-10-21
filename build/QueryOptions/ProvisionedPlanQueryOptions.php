<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProvisionedPlan resources
 *
 * Available select fields:
 * - capabilityStatus
 * - provisioningStatus
 * - service
 */
class ProvisionedPlanQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProvisionedPlan
     */
    public const FIELD_CAPABILITY_STATUS = 'capabilityStatus';
    public const FIELD_PROVISIONING_STATUS = 'provisioningStatus';
    public const FIELD_SERVICE = 'service';

    /**
     * Select specific ProvisionedPlan properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcProvisioningPolicy resources
 *
 * Available select fields:
 */
class CloudPcProvisioningPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudPcProvisioningPolicy
     */

    /**
     * Select specific CloudPcProvisioningPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

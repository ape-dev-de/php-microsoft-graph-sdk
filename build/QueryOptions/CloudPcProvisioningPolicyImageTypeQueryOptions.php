<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcProvisioningPolicyImageType resources
 *
 * Available select fields:
 */
class CloudPcProvisioningPolicyImageTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudPcProvisioningPolicyImageType
     */

    /**
     * Select specific CloudPcProvisioningPolicyImageType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

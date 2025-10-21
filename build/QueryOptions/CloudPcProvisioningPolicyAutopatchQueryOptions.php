<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcProvisioningPolicyAutopatch resources
 *
 * Available select fields:
 * - autopatchGroupId
 */
class CloudPcProvisioningPolicyAutopatchQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudPcProvisioningPolicyAutopatch
     */
    public const FIELD_AUTOPATCH_GROUP_ID = 'autopatchGroupId';

    /**
     * Select specific CloudPcProvisioningPolicyAutopatch properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

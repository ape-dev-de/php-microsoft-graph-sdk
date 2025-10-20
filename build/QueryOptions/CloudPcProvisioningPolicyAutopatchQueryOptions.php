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
    public const FIELD_AUTOPATCH_GROUP_ID = 'autopatchGroupId';

    /**
     * Select specific CloudPcProvisioningPolicyAutopatch properties
     * 
     * @param array<string> $select Use CloudPcProvisioningPolicyAutopatchQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

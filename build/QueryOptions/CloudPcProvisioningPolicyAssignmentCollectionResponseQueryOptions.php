<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcProvisioningPolicyAssignmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CloudPcProvisioningPolicyAssignmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CloudPcProvisioningPolicyAssignmentCollectionResponse properties
     * 
     * @param array<string> $select Use CloudPcProvisioningPolicyAssignmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

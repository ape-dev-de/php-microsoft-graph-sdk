<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcProvisioningPolicyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CloudPcProvisioningPolicyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CloudPcProvisioningPolicyCollectionResponse properties
     * 
     * @param array<string> $select Use CloudPcProvisioningPolicyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

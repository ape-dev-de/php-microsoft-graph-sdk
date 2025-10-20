<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CrossTenantAccessPolicyTargetCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CrossTenantAccessPolicyTargetCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CrossTenantAccessPolicyTargetCollectionResponse properties
     * 
     * @param array<string> $select Use CrossTenantAccessPolicyTargetCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

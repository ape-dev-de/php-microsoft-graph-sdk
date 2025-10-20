<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CrossTenantAccessPolicyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CrossTenantAccessPolicyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CrossTenantAccessPolicyCollectionResponse properties
     * 
     * @param array<string> $select Use CrossTenantAccessPolicyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

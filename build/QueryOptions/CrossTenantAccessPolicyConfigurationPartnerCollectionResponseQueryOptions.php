<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CrossTenantAccessPolicyConfigurationPartnerCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CrossTenantAccessPolicyConfigurationPartnerCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CrossTenantAccessPolicyConfigurationPartnerCollectionResponse properties
     * 
     * @param array<string> $select Use CrossTenantAccessPolicyConfigurationPartnerCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

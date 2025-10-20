<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CrossTenantAccessPolicyTenantRestrictions resources
 *
 * Available select fields:
 * - devices
 */
class CrossTenantAccessPolicyTenantRestrictionsQueryOptions extends QueryOptions
{
    public const FIELD_DEVICES = 'devices';

    /**
     * Select specific CrossTenantAccessPolicyTenantRestrictions properties
     * 
     * @param array<string> $select Use CrossTenantAccessPolicyTenantRestrictionsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

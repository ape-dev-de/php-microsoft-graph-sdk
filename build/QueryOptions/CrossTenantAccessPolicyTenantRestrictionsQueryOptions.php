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
    /**
     * Available select fields for CrossTenantAccessPolicyTenantRestrictions
     */
    public const FIELD_DEVICES = 'devices';

    /**
     * Select specific CrossTenantAccessPolicyTenantRestrictions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

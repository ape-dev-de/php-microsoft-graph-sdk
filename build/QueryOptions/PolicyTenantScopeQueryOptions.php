<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PolicyTenantScope resources
 *
 * Available select fields:
 * - policyScope
 */
class PolicyTenantScopeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PolicyTenantScope
     */
    public const FIELD_POLICY_SCOPE = 'policyScope';

    /**
     * Select specific PolicyTenantScope properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

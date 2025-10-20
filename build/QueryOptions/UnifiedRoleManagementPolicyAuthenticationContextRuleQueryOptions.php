<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleManagementPolicyAuthenticationContextRule resources
 *
 * Available select fields:
 * - claimValue
 * - isEnabled
 */
class UnifiedRoleManagementPolicyAuthenticationContextRuleQueryOptions extends QueryOptions
{
    public const FIELD_CLAIM_VALUE = 'claimValue';
    public const FIELD_IS_ENABLED = 'isEnabled';

    /**
     * Select specific UnifiedRoleManagementPolicyAuthenticationContextRule properties
     * 
     * @param array<string> $select Use UnifiedRoleManagementPolicyAuthenticationContextRuleQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

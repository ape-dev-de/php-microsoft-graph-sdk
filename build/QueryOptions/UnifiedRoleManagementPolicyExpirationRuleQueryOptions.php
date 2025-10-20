<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleManagementPolicyExpirationRule resources
 *
 * Available select fields:
 * - isExpirationRequired
 * - maximumDuration
 */
class UnifiedRoleManagementPolicyExpirationRuleQueryOptions extends QueryOptions
{
    public const FIELD_IS_EXPIRATION_REQUIRED = 'isExpirationRequired';
    public const FIELD_MAXIMUM_DURATION = 'maximumDuration';

    /**
     * Select specific UnifiedRoleManagementPolicyExpirationRule properties
     * 
     * @param array<string> $select Use UnifiedRoleManagementPolicyExpirationRuleQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

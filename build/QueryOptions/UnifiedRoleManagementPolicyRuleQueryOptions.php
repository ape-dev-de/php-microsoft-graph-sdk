<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleManagementPolicyRule resources
 *
 * Available select fields:
 * - target
 */
class UnifiedRoleManagementPolicyRuleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRoleManagementPolicyRule
     */
    public const FIELD_TARGET = 'target';

    /**
     * Select specific UnifiedRoleManagementPolicyRule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

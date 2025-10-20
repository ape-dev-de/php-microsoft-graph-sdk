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
    public const FIELD_TARGET = 'target';

    /**
     * Select specific UnifiedRoleManagementPolicyRule properties
     * 
     * @param array<string> $select Use UnifiedRoleManagementPolicyRuleQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

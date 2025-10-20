<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleManagementPolicyEnablementRule resources
 *
 * Available select fields:
 * - enabledRules
 */
class UnifiedRoleManagementPolicyEnablementRuleQueryOptions extends QueryOptions
{
    public const FIELD_ENABLED_RULES = 'enabledRules';

    /**
     * Select specific UnifiedRoleManagementPolicyEnablementRule properties
     * 
     * @param array<string> $select Use UnifiedRoleManagementPolicyEnablementRuleQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

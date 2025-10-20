<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleManagementPolicyRuleCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UnifiedRoleManagementPolicyRuleCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UnifiedRoleManagementPolicyRuleCollectionResponse properties
     * 
     * @param array<string> $select Use UnifiedRoleManagementPolicyRuleCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

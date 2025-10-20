<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleManagementPolicyNotificationRuleCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UnifiedRoleManagementPolicyNotificationRuleCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UnifiedRoleManagementPolicyNotificationRuleCollectionResponse properties
     * 
     * @param array<string> $select Use UnifiedRoleManagementPolicyNotificationRuleCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

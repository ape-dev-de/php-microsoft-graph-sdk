<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleManagementPolicyExpirationRuleCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UnifiedRoleManagementPolicyExpirationRuleCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UnifiedRoleManagementPolicyExpirationRuleCollectionResponse properties
     * 
     * @param array<string> $select Use UnifiedRoleManagementPolicyExpirationRuleCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

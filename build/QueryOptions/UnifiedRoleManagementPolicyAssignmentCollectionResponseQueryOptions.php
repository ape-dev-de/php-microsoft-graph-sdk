<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleManagementPolicyAssignmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UnifiedRoleManagementPolicyAssignmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UnifiedRoleManagementPolicyAssignmentCollectionResponse properties
     * 
     * @param array<string> $select Use UnifiedRoleManagementPolicyAssignmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

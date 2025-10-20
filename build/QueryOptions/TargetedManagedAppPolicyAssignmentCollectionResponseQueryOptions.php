<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TargetedManagedAppPolicyAssignmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TargetedManagedAppPolicyAssignmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TargetedManagedAppPolicyAssignmentCollectionResponse properties
     * 
     * @param array<string> $select Use TargetedManagedAppPolicyAssignmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

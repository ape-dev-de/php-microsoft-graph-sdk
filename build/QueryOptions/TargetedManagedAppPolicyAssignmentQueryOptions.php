<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TargetedManagedAppPolicyAssignment resources
 *
 * Available select fields:
 * - target
 */
class TargetedManagedAppPolicyAssignmentQueryOptions extends QueryOptions
{
    public const FIELD_TARGET = 'target';

    /**
     * Select specific TargetedManagedAppPolicyAssignment properties
     * 
     * @param array<string> $select Use TargetedManagedAppPolicyAssignmentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

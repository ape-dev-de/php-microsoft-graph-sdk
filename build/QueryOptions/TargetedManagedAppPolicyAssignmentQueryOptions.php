<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TargetedManagedAppPolicyAssignment resources
 *
 * Available select fields:
 */
class TargetedManagedAppPolicyAssignmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TargetedManagedAppPolicyAssignment
     */

    /**
     * Select specific TargetedManagedAppPolicyAssignment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

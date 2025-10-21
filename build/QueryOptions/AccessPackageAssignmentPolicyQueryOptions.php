<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageAssignmentPolicy resources
 *
 * Available select fields:
 */
class AccessPackageAssignmentPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageAssignmentPolicy
     */

    /**
     * Select specific AccessPackageAssignmentPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

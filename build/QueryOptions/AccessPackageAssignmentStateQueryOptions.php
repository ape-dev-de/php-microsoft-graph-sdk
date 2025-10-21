<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageAssignmentState resources
 *
 * Available select fields:
 */
class AccessPackageAssignmentStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageAssignmentState
     */

    /**
     * Select specific AccessPackageAssignmentState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

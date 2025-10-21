<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageAssignmentFilterByCurrentUserOptions resources
 *
 * Available select fields:
 */
class AccessPackageAssignmentFilterByCurrentUserOptionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageAssignmentFilterByCurrentUserOptions
     */

    /**
     * Select specific AccessPackageAssignmentFilterByCurrentUserOptions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

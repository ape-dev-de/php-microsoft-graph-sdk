<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageAssignmentRequestFilterByCurrentUserOptions resources
 *
 * Available select fields:
 */
class AccessPackageAssignmentRequestFilterByCurrentUserOptionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageAssignmentRequestFilterByCurrentUserOptions
     */

    /**
     * Select specific AccessPackageAssignmentRequestFilterByCurrentUserOptions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

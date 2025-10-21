<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageAssignmentRequest resources
 *
 * Available select fields:
 */
class AccessPackageAssignmentRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageAssignmentRequest
     */

    /**
     * Select specific AccessPackageAssignmentRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

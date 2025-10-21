<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageAssignmentRequestCallbackData resources
 *
 * Available select fields:
 */
class AccessPackageAssignmentRequestCallbackDataQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageAssignmentRequestCallbackData
     */

    /**
     * Select specific AccessPackageAssignmentRequestCallbackData properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

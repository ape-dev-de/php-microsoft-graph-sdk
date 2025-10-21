<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageAssignmentRequestWorkflowExtension resources
 *
 * Available select fields:
 */
class AccessPackageAssignmentRequestWorkflowExtensionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageAssignmentRequestWorkflowExtension
     */

    /**
     * Select specific AccessPackageAssignmentRequestWorkflowExtension properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

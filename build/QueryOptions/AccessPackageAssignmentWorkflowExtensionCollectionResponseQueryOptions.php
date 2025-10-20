<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageAssignmentWorkflowExtensionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AccessPackageAssignmentWorkflowExtensionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AccessPackageAssignmentWorkflowExtensionCollectionResponse properties
     * 
     * @param array<string> $select Use AccessPackageAssignmentWorkflowExtensionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageAssignmentRequestWorkflowExtensionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AccessPackageAssignmentRequestWorkflowExtensionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AccessPackageAssignmentRequestWorkflowExtensionCollectionResponse properties
     * 
     * @param array<string> $select Use AccessPackageAssignmentRequestWorkflowExtensionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

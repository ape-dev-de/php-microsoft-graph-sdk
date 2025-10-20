<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageAssignmentRequestCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AccessPackageAssignmentRequestCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AccessPackageAssignmentRequestCollectionResponse properties
     * 
     * @param array<string> $select Use AccessPackageAssignmentRequestCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

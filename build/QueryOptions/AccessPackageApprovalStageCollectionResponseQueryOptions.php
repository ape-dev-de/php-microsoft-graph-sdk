<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageApprovalStageCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AccessPackageApprovalStageCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AccessPackageApprovalStageCollectionResponse properties
     * 
     * @param array<string> $select Use AccessPackageApprovalStageCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

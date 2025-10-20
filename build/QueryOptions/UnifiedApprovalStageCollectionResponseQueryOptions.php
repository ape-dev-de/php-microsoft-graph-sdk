<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedApprovalStageCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UnifiedApprovalStageCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UnifiedApprovalStageCollectionResponse properties
     * 
     * @param array<string> $select Use UnifiedApprovalStageCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

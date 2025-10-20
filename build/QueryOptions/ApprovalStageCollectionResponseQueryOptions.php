<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ApprovalStageCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ApprovalStageCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ApprovalStageCollectionResponse properties
     * 
     * @param array<string> $select Use ApprovalStageCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

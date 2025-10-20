<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ApprovalCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ApprovalCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ApprovalCollectionResponse properties
     * 
     * @param array<string> $select Use ApprovalCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LabelContentRightCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class LabelContentRightCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific LabelContentRightCollectionResponse properties
     * 
     * @param array<string> $select Use LabelContentRightCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

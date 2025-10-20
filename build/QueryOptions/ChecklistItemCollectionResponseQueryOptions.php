<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChecklistItemCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ChecklistItemCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ChecklistItemCollectionResponse properties
     * 
     * @param array<string> $select Use ChecklistItemCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

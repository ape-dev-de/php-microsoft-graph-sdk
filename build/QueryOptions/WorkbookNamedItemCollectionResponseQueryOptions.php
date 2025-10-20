<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookNamedItemCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WorkbookNamedItemCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WorkbookNamedItemCollectionResponse properties
     * 
     * @param array<string> $select Use WorkbookNamedItemCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

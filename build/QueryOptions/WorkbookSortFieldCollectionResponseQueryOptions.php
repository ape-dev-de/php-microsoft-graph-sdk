<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookSortFieldCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WorkbookSortFieldCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WorkbookSortFieldCollectionResponse properties
     * 
     * @param array<string> $select Use WorkbookSortFieldCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

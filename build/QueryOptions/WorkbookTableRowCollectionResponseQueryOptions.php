<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookTableRowCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WorkbookTableRowCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WorkbookTableRowCollectionResponse properties
     * 
     * @param array<string> $select Use WorkbookTableRowCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

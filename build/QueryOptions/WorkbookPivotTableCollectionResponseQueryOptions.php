<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookPivotTableCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WorkbookPivotTableCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WorkbookPivotTableCollectionResponse properties
     * 
     * @param array<string> $select Use WorkbookPivotTableCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

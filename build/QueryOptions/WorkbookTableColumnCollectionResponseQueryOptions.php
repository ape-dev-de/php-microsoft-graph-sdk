<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookTableColumnCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WorkbookTableColumnCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WorkbookTableColumnCollectionResponse properties
     * 
     * @param array<string> $select Use WorkbookTableColumnCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookRangeViewCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WorkbookRangeViewCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WorkbookRangeViewCollectionResponse properties
     * 
     * @param array<string> $select Use WorkbookRangeViewCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

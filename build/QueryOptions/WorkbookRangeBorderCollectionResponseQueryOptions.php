<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookRangeBorderCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WorkbookRangeBorderCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WorkbookRangeBorderCollectionResponse properties
     * 
     * @param array<string> $select Use WorkbookRangeBorderCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

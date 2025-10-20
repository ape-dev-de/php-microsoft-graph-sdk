<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookOperationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WorkbookOperationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WorkbookOperationCollectionResponse properties
     * 
     * @param array<string> $select Use WorkbookOperationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

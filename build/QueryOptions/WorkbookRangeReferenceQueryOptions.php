<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookRangeReference resources
 *
 * Available select fields:
 * - address
 */
class WorkbookRangeReferenceQueryOptions extends QueryOptions
{
    public const FIELD_ADDRESS = 'address';

    /**
     * Select specific WorkbookRangeReference properties
     * 
     * @param array<string> $select Use WorkbookRangeReferenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

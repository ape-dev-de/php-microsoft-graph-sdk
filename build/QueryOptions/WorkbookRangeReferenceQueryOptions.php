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
    /**
     * Available select fields for WorkbookRangeReference
     */
    public const FIELD_ADDRESS = 'address';

    /**
     * Select specific WorkbookRangeReference properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

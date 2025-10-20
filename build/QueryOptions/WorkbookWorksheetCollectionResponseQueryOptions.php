<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookWorksheetCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WorkbookWorksheetCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WorkbookWorksheetCollectionResponse properties
     * 
     * @param array<string> $select Use WorkbookWorksheetCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookSessionInfo resources
 *
 * Available select fields:
 * - id
 * - persistChanges
 */
class WorkbookSessionInfoQueryOptions extends QueryOptions
{
    public const FIELD_ID = 'id';
    public const FIELD_PERSIST_CHANGES = 'persistChanges';

    /**
     * Select specific WorkbookSessionInfo properties
     * 
     * @param array<string> $select Use WorkbookSessionInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

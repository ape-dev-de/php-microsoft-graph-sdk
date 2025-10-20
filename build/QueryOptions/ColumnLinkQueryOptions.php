<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ColumnLink resources
 *
 * Available select fields:
 * - name
 */
class ColumnLinkQueryOptions extends QueryOptions
{
    public const FIELD_NAME = 'name';

    /**
     * Select specific ColumnLink properties
     * 
     * @param array<string> $select Use ColumnLinkQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

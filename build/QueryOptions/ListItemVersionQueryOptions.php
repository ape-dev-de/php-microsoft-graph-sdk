<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ListItemVersion resources
 *
 * Available select fields:
 * - fields
 */
class ListItemVersionQueryOptions extends QueryOptions
{
    public const FIELD_FIELDS = 'fields';

    /**
     * Select specific ListItemVersion properties
     * 
     * @param array<string> $select Use ListItemVersionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

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
    /**
     * Available select fields for ListItemVersion
     */
    public const FIELD_FIELDS = 'fields';

    /**
     * Select specific ListItemVersion properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

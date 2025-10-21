<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CollapseProperty resources
 *
 * Available select fields:
 * - fields
 * - limit
 */
class CollapsePropertyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CollapseProperty
     */
    public const FIELD_FIELDS = 'fields';
    public const FIELD_LIMIT = 'limit';

    /**
     * Select specific CollapseProperty properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

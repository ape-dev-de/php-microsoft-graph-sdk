<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AddIn resources
 *
 * Available select fields:
 * - id
 * - items
 */
class AddInQueryOptions extends QueryOptions
{
    public const FIELD_ID = 'id';
    public const FIELD_ITEMS = 'items';

    /**
     * Select specific AddIn properties
     * 
     * @param array<string> $select Use AddInQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

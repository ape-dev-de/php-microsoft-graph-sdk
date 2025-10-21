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
    /**
     * Available select fields for AddIn
     */
    public const FIELD_ID = 'id';
    public const FIELD_ITEMS = 'items';

    /**
     * Select specific AddIn properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

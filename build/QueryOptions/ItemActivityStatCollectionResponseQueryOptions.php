<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ItemActivityStatCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ItemActivityStatCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ItemActivityStatCollectionResponse properties
     * 
     * @param array<string> $select Use ItemActivityStatCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

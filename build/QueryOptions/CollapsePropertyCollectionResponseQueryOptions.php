<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CollapsePropertyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CollapsePropertyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CollapsePropertyCollectionResponse properties
     * 
     * @param array<string> $select Use CollapsePropertyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ResourceAccessCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ResourceAccessCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ResourceAccessCollectionResponse properties
     * 
     * @param array<string> $select Use ResourceAccessCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PolicyBaseCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PolicyBaseCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PolicyBaseCollectionResponse properties
     * 
     * @param array<string> $select Use PolicyBaseCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

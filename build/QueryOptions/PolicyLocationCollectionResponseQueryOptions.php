<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PolicyLocationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PolicyLocationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PolicyLocationCollectionResponse properties
     * 
     * @param array<string> $select Use PolicyLocationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

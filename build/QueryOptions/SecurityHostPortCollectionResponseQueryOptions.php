<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostPortCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityHostPortCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityHostPortCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityHostPortCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

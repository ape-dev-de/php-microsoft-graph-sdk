<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostComponentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityHostComponentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityHostComponentCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityHostComponentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

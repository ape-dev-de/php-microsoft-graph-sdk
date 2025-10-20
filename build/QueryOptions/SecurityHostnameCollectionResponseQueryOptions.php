<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostnameCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityHostnameCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityHostnameCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityHostnameCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

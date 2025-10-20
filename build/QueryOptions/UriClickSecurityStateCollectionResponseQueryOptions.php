<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UriClickSecurityStateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UriClickSecurityStateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UriClickSecurityStateCollectionResponse properties
     * 
     * @param array<string> $select Use UriClickSecurityStateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

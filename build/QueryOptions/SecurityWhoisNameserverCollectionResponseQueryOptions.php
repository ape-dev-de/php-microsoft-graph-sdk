<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityWhoisNameserverCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityWhoisNameserverCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityWhoisNameserverCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityWhoisNameserverCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

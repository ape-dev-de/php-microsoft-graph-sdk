<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySubdomainCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecuritySubdomainCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecuritySubdomainCollectionResponse properties
     * 
     * @param array<string> $select Use SecuritySubdomainCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

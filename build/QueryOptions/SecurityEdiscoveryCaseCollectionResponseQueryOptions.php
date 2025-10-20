<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryCaseCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityEdiscoveryCaseCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityEdiscoveryCaseCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityEdiscoveryCaseCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

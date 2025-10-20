<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryCustodianCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityEdiscoveryCustodianCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityEdiscoveryCustodianCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityEdiscoveryCustodianCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

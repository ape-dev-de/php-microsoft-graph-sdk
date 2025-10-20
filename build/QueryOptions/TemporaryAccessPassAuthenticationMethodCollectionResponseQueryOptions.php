<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TemporaryAccessPassAuthenticationMethodCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TemporaryAccessPassAuthenticationMethodCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TemporaryAccessPassAuthenticationMethodCollectionResponse properties
     * 
     * @param array<string> $select Use TemporaryAccessPassAuthenticationMethodCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

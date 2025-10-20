<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Fido2AuthenticationMethodCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class Fido2AuthenticationMethodCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific Fido2AuthenticationMethodCollectionResponse properties
     * 
     * @param array<string> $select Use Fido2AuthenticationMethodCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

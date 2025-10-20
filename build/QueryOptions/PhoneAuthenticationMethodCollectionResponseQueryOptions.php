<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PhoneAuthenticationMethodCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PhoneAuthenticationMethodCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PhoneAuthenticationMethodCollectionResponse properties
     * 
     * @param array<string> $select Use PhoneAuthenticationMethodCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

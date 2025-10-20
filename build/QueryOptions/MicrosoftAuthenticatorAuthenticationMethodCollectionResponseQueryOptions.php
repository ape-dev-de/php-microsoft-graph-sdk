<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftAuthenticatorAuthenticationMethodCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MicrosoftAuthenticatorAuthenticationMethodCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MicrosoftAuthenticatorAuthenticationMethodCollectionResponse properties
     * 
     * @param array<string> $select Use MicrosoftAuthenticatorAuthenticationMethodCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

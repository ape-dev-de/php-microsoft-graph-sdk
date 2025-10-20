<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftAuthenticatorAuthenticationMethodConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MicrosoftAuthenticatorAuthenticationMethodConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MicrosoftAuthenticatorAuthenticationMethodConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use MicrosoftAuthenticatorAuthenticationMethodConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

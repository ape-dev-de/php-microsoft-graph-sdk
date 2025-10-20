<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftAuthenticatorAuthenticationMethodTargetCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MicrosoftAuthenticatorAuthenticationMethodTargetCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MicrosoftAuthenticatorAuthenticationMethodTargetCollectionResponse properties
     * 
     * @param array<string> $select Use MicrosoftAuthenticatorAuthenticationMethodTargetCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftAuthenticatorAuthenticationMethodTarget resources
 *
 * Available select fields:
 * - authenticationMode
 */
class MicrosoftAuthenticatorAuthenticationMethodTargetQueryOptions extends QueryOptions
{
    public const FIELD_AUTHENTICATION_MODE = 'authenticationMode';

    /**
     * Select specific MicrosoftAuthenticatorAuthenticationMethodTarget properties
     * 
     * @param array<string> $select Use MicrosoftAuthenticatorAuthenticationMethodTargetQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

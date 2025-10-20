<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp resources
 *
 * Available select fields:
 * - identityProviders
 */
class OnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUpQueryOptions extends QueryOptions
{
    public const FIELD_IDENTITY_PROVIDERS = 'identityProviders';

    /**
     * Select specific OnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp properties
     * 
     * @param array<string> $select Use OnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUpQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp resources
 *
 * Available select fields:
 */
class OnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUpQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp
     */

    /**
     * Select specific OnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

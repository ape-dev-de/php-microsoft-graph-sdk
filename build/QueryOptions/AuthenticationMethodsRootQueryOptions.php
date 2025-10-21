<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationMethodsRoot resources
 *
 * Available select fields:
 * - userRegistrationDetails
 */
class AuthenticationMethodsRootQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationMethodsRoot
     */
    public const FIELD_USER_REGISTRATION_DETAILS = 'userRegistrationDetails';

    /**
     * Select specific AuthenticationMethodsRoot properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

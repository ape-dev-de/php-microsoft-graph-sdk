<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationMethodModeDetail resources
 *
 * Available select fields:
 * - authenticationMethod
 * - displayName
 */
class AuthenticationMethodModeDetailQueryOptions extends QueryOptions
{
    public const FIELD_AUTHENTICATION_METHOD = 'authenticationMethod';
    public const FIELD_DISPLAY_NAME = 'displayName';

    /**
     * Select specific AuthenticationMethodModeDetail properties
     * 
     * @param array<string> $select Use AuthenticationMethodModeDetailQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationStrengthRoot resources
 *
 * Available select fields:
 * - combinations
 * - authenticationMethodModes
 * - policies
 */
class AuthenticationStrengthRootQueryOptions extends QueryOptions
{
    public const FIELD_COMBINATIONS = 'combinations';
    public const FIELD_AUTHENTICATION_METHOD_MODES = 'authenticationMethodModes';
    public const FIELD_POLICIES = 'policies';

    /**
     * Select specific AuthenticationStrengthRoot properties
     * 
     * @param array<string> $select Use AuthenticationStrengthRootQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

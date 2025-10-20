<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthContext resources
 *
 * Available select fields:
 * - authenticationContextValue
 */
class AuthContextQueryOptions extends QueryOptions
{
    public const FIELD_AUTHENTICATION_CONTEXT_VALUE = 'authenticationContextValue';

    /**
     * Select specific AuthContext properties
     * 
     * @param array<string> $select Use AuthContextQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

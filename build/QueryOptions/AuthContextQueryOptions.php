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
    /**
     * Available select fields for AuthContext
     */
    public const FIELD_AUTHENTICATION_CONTEXT_VALUE = 'authenticationContextValue';

    /**
     * Select specific AuthContext properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationMethodsPolicyMigrationState resources
 *
 * Available select fields:
 */
class AuthenticationMethodsPolicyMigrationStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationMethodsPolicyMigrationState
     */

    /**
     * Select specific AuthenticationMethodsPolicyMigrationState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

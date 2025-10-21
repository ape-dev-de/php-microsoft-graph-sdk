<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationMethodPlatform resources
 *
 * Available select fields:
 */
class AuthenticationMethodPlatformQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationMethodPlatform
     */

    /**
     * Select specific AuthenticationMethodPlatform properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

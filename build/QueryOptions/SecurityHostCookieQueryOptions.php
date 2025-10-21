<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostCookie resources
 *
 * Available select fields:
 */
class SecurityHostCookieQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityHostCookie
     */

    /**
     * Select specific SecurityHostCookie properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

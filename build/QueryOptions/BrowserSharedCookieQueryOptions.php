<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BrowserSharedCookie resources
 *
 * Available select fields:
 */
class BrowserSharedCookieQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BrowserSharedCookie
     */

    /**
     * Select specific BrowserSharedCookie properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

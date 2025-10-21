<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BrowserSharedCookieStatus resources
 *
 * Available select fields:
 */
class BrowserSharedCookieStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BrowserSharedCookieStatus
     */

    /**
     * Select specific BrowserSharedCookieStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

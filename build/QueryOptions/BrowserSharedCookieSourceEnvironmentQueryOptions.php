<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BrowserSharedCookieSourceEnvironment resources
 *
 * Available select fields:
 */
class BrowserSharedCookieSourceEnvironmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BrowserSharedCookieSourceEnvironment
     */

    /**
     * Select specific BrowserSharedCookieSourceEnvironment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

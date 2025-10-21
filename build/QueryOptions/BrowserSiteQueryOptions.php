<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BrowserSite resources
 *
 * Available select fields:
 */
class BrowserSiteQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BrowserSite
     */

    /**
     * Select specific BrowserSite properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

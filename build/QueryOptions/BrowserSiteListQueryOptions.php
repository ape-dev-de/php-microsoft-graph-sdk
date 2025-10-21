<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BrowserSiteList resources
 *
 * Available select fields:
 */
class BrowserSiteListQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BrowserSiteList
     */

    /**
     * Select specific BrowserSiteList properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

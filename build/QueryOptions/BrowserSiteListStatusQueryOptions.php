<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BrowserSiteListStatus resources
 *
 * Available select fields:
 */
class BrowserSiteListStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BrowserSiteListStatus
     */

    /**
     * Select specific BrowserSiteListStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

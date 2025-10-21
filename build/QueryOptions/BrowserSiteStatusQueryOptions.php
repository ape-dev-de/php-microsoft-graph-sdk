<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BrowserSiteStatus resources
 *
 * Available select fields:
 */
class BrowserSiteStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BrowserSiteStatus
     */

    /**
     * Select specific BrowserSiteStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BrowserSiteCompatibilityMode resources
 *
 * Available select fields:
 */
class BrowserSiteCompatibilityModeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BrowserSiteCompatibilityMode
     */

    /**
     * Select specific BrowserSiteCompatibilityMode properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

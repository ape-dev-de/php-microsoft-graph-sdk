<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BrowserSiteTargetEnvironment resources
 *
 * Available select fields:
 */
class BrowserSiteTargetEnvironmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BrowserSiteTargetEnvironment
     */

    /**
     * Select specific BrowserSiteTargetEnvironment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

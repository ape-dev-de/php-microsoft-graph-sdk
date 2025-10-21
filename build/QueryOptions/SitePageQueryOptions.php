<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SitePage resources
 *
 * Available select fields:
 */
class SitePageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SitePage
     */

    /**
     * Select specific SitePage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

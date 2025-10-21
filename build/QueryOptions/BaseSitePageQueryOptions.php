<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BaseSitePage resources
 *
 * Available select fields:
 */
class BaseSitePageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BaseSitePage
     */

    /**
     * Select specific BaseSitePage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

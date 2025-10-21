<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BrowserSiteMergeType resources
 *
 * Available select fields:
 */
class BrowserSiteMergeTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BrowserSiteMergeType
     */

    /**
     * Select specific BrowserSiteMergeType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

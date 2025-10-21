<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PageLayoutType resources
 *
 * Available select fields:
 */
class PageLayoutTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PageLayoutType
     */

    /**
     * Select specific PageLayoutType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

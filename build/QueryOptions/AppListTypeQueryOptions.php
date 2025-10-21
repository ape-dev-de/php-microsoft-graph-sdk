<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppListType resources
 *
 * Available select fields:
 */
class AppListTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AppListType
     */

    /**
     * Select specific AppListType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

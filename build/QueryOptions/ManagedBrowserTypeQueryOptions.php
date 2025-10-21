<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedBrowserType resources
 *
 * Available select fields:
 */
class ManagedBrowserTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedBrowserType
     */

    /**
     * Select specific ManagedBrowserType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

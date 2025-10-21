<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceUpdateCategory resources
 *
 * Available select fields:
 */
class ServiceUpdateCategoryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServiceUpdateCategory
     */

    /**
     * Select specific ServiceUpdateCategory properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

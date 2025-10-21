<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileAppCategory resources
 *
 * Available select fields:
 */
class MobileAppCategoryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MobileAppCategory
     */

    /**
     * Select specific MobileAppCategory properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

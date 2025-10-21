<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityFilePlanSubcategory resources
 *
 * Available select fields:
 */
class SecurityFilePlanSubcategoryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityFilePlanSubcategory
     */

    /**
     * Select specific SecurityFilePlanSubcategory properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySubcategoryTemplate resources
 *
 * Available select fields:
 */
class SecuritySubcategoryTemplateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecuritySubcategoryTemplate
     */

    /**
     * Select specific SecuritySubcategoryTemplate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

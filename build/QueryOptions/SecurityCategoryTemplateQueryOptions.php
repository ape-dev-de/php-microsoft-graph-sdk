<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityCategoryTemplate resources
 *
 * Available select fields:
 */
class SecurityCategoryTemplateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityCategoryTemplate
     */

    /**
     * Select specific SecurityCategoryTemplate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

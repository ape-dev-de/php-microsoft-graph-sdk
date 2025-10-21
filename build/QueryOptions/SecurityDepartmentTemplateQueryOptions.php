<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDepartmentTemplate resources
 *
 * Available select fields:
 */
class SecurityDepartmentTemplateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityDepartmentTemplate
     */

    /**
     * Select specific SecurityDepartmentTemplate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityFilePlanDepartment resources
 *
 * Available select fields:
 */
class SecurityFilePlanDepartmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityFilePlanDepartment
     */

    /**
     * Select specific SecurityFilePlanDepartment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

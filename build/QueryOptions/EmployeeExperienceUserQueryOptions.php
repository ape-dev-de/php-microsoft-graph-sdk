<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EmployeeExperienceUser resources
 *
 * Available select fields:
 */
class EmployeeExperienceUserQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EmployeeExperienceUser
     */

    /**
     * Select specific EmployeeExperienceUser properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

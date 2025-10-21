<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationUserRole resources
 *
 * Available select fields:
 */
class EducationUserRoleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationUserRole
     */

    /**
     * Select specific EducationUserRole properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

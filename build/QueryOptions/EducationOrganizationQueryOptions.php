<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationOrganization resources
 *
 * Available select fields:
 */
class EducationOrganizationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationOrganization
     */

    /**
     * Select specific EducationOrganization properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationUser resources
 *
 * Available select fields:
 */
class EducationUserQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationUser
     */

    /**
     * Select specific EducationUser properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

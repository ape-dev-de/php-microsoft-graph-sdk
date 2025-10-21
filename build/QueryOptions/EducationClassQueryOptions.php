<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationClass resources
 *
 * Available select fields:
 */
class EducationClassQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationClass
     */

    /**
     * Select specific EducationClass properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

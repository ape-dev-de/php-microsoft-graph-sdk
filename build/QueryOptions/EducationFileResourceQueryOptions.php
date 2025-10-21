<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationFileResource resources
 *
 * Available select fields:
 */
class EducationFileResourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationFileResource
     */

    /**
     * Select specific EducationFileResource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

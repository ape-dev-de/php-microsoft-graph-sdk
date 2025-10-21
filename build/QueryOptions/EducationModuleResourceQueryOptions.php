<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationModuleResource resources
 *
 * Available select fields:
 */
class EducationModuleResourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationModuleResource
     */

    /**
     * Select specific EducationModuleResource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

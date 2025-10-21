<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationModuleStatus resources
 *
 * Available select fields:
 */
class EducationModuleStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationModuleStatus
     */

    /**
     * Select specific EducationModuleStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

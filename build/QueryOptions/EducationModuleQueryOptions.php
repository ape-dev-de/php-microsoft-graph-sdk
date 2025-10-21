<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationModule resources
 *
 * Available select fields:
 */
class EducationModuleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationModule
     */

    /**
     * Select specific EducationModule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationPowerPointResource resources
 *
 * Available select fields:
 */
class EducationPowerPointResourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationPowerPointResource
     */

    /**
     * Select specific EducationPowerPointResource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

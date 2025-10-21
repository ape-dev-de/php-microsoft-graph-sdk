<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationExternalResource resources
 *
 * Available select fields:
 */
class EducationExternalResourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationExternalResource
     */

    /**
     * Select specific EducationExternalResource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

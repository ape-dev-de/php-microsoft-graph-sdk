<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationTeamsAppResource resources
 *
 * Available select fields:
 */
class EducationTeamsAppResourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationTeamsAppResource
     */

    /**
     * Select specific EducationTeamsAppResource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

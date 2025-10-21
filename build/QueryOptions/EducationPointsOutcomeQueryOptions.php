<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationPointsOutcome resources
 *
 * Available select fields:
 */
class EducationPointsOutcomeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationPointsOutcome
     */

    /**
     * Select specific EducationPointsOutcome properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

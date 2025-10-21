<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationRubricOutcome resources
 *
 * Available select fields:
 */
class EducationRubricOutcomeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationRubricOutcome
     */

    /**
     * Select specific EducationRubricOutcome properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

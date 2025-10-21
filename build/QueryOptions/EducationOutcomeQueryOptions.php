<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationOutcome resources
 *
 * Available select fields:
 */
class EducationOutcomeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationOutcome
     */

    /**
     * Select specific EducationOutcome properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationFeedbackResourceOutcome resources
 *
 * Available select fields:
 */
class EducationFeedbackResourceOutcomeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationFeedbackResourceOutcome
     */

    /**
     * Select specific EducationFeedbackResourceOutcome properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

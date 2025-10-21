<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationFeedbackOutcome resources
 *
 * Available select fields:
 */
class EducationFeedbackOutcomeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationFeedbackOutcome
     */

    /**
     * Select specific EducationFeedbackOutcome properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationFeedbackResourceOutcomeStatus resources
 *
 * Available select fields:
 */
class EducationFeedbackResourceOutcomeStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationFeedbackResourceOutcomeStatus
     */

    /**
     * Select specific EducationFeedbackResourceOutcomeStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

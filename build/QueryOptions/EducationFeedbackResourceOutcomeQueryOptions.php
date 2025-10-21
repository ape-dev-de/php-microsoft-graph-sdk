<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationFeedbackResourceOutcome resources
 *
 * Available select fields:
 * - feedbackResource
 * - resourceStatus
 */
class EducationFeedbackResourceOutcomeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationFeedbackResourceOutcome
     */
    public const FIELD_FEEDBACK_RESOURCE = 'feedbackResource';
    public const FIELD_RESOURCE_STATUS = 'resourceStatus';

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

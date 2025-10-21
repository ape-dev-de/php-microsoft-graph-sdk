<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationFeedbackOutcome resources
 *
 * Available select fields:
 * - feedback
 * - publishedFeedback
 */
class EducationFeedbackOutcomeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationFeedbackOutcome
     */
    public const FIELD_FEEDBACK = 'feedback';
    public const FIELD_PUBLISHED_FEEDBACK = 'publishedFeedback';

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

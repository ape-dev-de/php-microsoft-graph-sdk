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
    public const FIELD_FEEDBACK = 'feedback';
    public const FIELD_PUBLISHED_FEEDBACK = 'publishedFeedback';

    /**
     * Select specific EducationFeedbackOutcome properties
     * 
     * @param array<string> $select Use EducationFeedbackOutcomeQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

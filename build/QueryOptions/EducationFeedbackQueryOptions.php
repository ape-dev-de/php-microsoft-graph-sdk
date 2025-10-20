<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationFeedback resources
 *
 * Available select fields:
 * - feedbackBy
 * - feedbackDateTime
 * - text
 */
class EducationFeedbackQueryOptions extends QueryOptions
{
    public const FIELD_FEEDBACK_BY = 'feedbackBy';
    public const FIELD_FEEDBACK_DATE_TIME = 'feedbackDateTime';
    public const FIELD_TEXT = 'text';

    /**
     * Select specific EducationFeedback properties
     * 
     * @param array<string> $select Use EducationFeedbackQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
